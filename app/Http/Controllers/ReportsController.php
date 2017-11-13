<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Report;
use Datatables;
use DB;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.reports.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id, Report $report)
     {
        $report = $report->join('jobs', 'jobs.id', '=', 'reports.job_id')->select('reports.*', 'jobs.title')->find($id);
         if (! $report){
           return redirect('adminpanel/reports')->withFlashMessage(' عذرا . لم نجد ما تبحث عنه فى بيانات الموقع ');
         }
         $show = true;
         $data = ['view' => 1];
         DB::table('reports')->where('id', $id)->update(['view' => 1]);
         return view('admin.reports.show', compact('report', 'show'));
     }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Report $report)
    {
      $report = $report->find($id);
      if (! $report){
        return redirect('adminpanel/reports')->withFlashMessage(' عذرا . لم نجد ما تبحث عنه فى بيانات الموقع ');
      }

      $report->delete();
      return redirect()->back()->withFlashMessage(' تم حذف الابلاغ بنجاح ');
    }

    public function anyData(Report $report)
    {
      $report = $report->join('jobs', 'jobs.id', '=', 'reports.job_id')->select('reports.*', 'jobs.title')->get();
      return DataTables::of($report)
        ->editColumn('title', function ($model) {
          return \Html::link('/adminpanel/jobs/' . $model->job_id . '/show', $model->title);
        })
        ->editColumn('view', function ($model) {
          $view = reports_view();
          return '<span class="badge badge-info">' . $view[$model->view] . '</span>';
        })
        ->editColumn('control', function ($model) {
          $all = '<a href="'.url('/adminpanel/reports/' . $model->id . '/show').'" class="btn btn-success btn-circle"><i class="fa fa-eye"></i></a>';
          $all .= '<a href="'.url('/adminpanel/reports/' . $model->id . '/delete').'" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
          return  $all;
        })
        ->make(true);
    }
}
