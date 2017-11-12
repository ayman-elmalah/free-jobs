<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Job;
use Datatables;

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
}
