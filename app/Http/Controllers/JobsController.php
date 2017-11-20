<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Job;
use Datatables;
use App\Http\Requests\AddJob;
use DB;

class JobsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('admin.jobs.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('main.jobs.index');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(AddJob $request)
  {
    DB::table('jobs')->insert([
      'title' => $request->title,
      'company_name' => $request->company_name,
      'category' => $request->category,
      'experience' => $request->experience,
      'location' => $request->location,
      'description' => $request->description,
      'email_address' => $request->email_address,
      'created_at' => time(),
    ]);

    return redirect('/')->withFlashMessage(' تم نشر الوظيفه بنجاح ');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id, Job $job)
  {
      $job = $job->find($id);
      $show = true;
      if (! $job){
        return redirect('adminpanel/jobs')->withFlashMessage(' عذرا . لم نجد ما تبحث عنه فى بيانات الموقع ');
      }
      return view('admin.jobs.show', compact('job', 'show'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id, Job $job)
  {
      $job = $job->find($id);
      if (! $job){
        return redirect('adminpanel/jobs')->withFlashMessage(' عذرا . لم نجد ما تبحث عنه فى بيانات الموقع ');
      }

      $job->delete();
      return redirect('adminpanel/jobs')->withFlashMessage(' تم حذف الوظيفه بنجاح ');
  }

  //Show all data to datatables
  public function anyData(Job $job)
  {
    $job = $job->all();
    return DataTables::of($job)
      ->editColumn('title', function ($model) {
        return \Html::link('/adminpanel/jobs/' . $model->id . '/show', $model->title);
      })
      ->editColumn('category', function ($model) {
        $category = job_category();
        return '<span class="badge badge-info">' . $category[$model->category] . '</span>';
      })
      ->editColumn('experience', function ($model) {
        $experience = job_experience();
        return '<span class="badge badge-info">' . $experience[$model->experience] . '</span>';
      })
      ->editColumn('location', function ($model) {
        $location = job_location();
        return '<span class="badge badge-info">' . $location[$model->location] . '</span>';
      })
      ->editColumn('control', function ($model) {
        return '<a href="'.url('/adminpanel/jobs/' . $model->id . '/delete').'" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
      })
      ->make(true);
  }

  //Show search page
  public function search(Request $request, Job $job) {
    $requestAll = array_except($request->toArray(), ['submit', '_token', 'page']);

    $query = $job->select('*');

    foreach ($requestAll as $key => $req) {
      if ($req != '') {
        if ($key == 'title') {
            $query->where($key, 'LIKE' , '%'.$req.'%');
        } else {
            $query->where($key, $req);
        }
      }
    }

    $search = true;
    $jobs = $query->orderBy('id', 'desc')->paginate(24);
    $count = $jobs->count();
    return view('main.search.index', compact('jobs', 'search', 'count'));
  }

  //Show job details
  public function job($id, $title, Job $job) {
    $job = $job->find($id);
    if (! $job){
      return redirect('/')->withFlashMessage(' عذرا . لم نجد ما تبحث عنه فى بيانات الموقع ');
    }
    return view('main.jobs.show', compact('job'));
  }
}
