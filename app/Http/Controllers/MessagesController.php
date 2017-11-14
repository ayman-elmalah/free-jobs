<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Message;
use Datatables;
use DB;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.messages.index');
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
    public function show($id, Message $message)
    {
        $message = $message->find($id);
        if (! $message){
          return redirect('adminpanel/messages')->withFlashMessage(' عذرا . لم نجد ما تبحث عنه فى بيانات الموقع ');
        }
        $show = true;
        $data = ['view' => 1];
        DB::table('messages')->where('id', $id)->update(['view' => 1]);
        return view('admin.messages.show', compact('message', 'show'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Message $message)
    {
        $message = $message->find($id);
        if (! $message){
          return redirect('adminpanel/messages')->withFlashMessage(' عذرا . لم نجد ما تبحث عنه فى بيانات الموقع ');
        }

        $message->delete();
        return redirect('adminpanel/messages')->withFlashMessage(' تم حذف الرساله بنجاح ');
    }

    public function anyData(Message $message)
    {
      $message = $message->all();
      return DataTables::of($message)
        ->editColumn('view', function ($model) {
          $view = messages_view();
          return '<span class="badge badge-info">' . $view[$model->view] . '</span>';
        })
        ->editColumn('control', function ($model) {
          $all = '<a href="'.url('/adminpanel/messages/' . $model->id . '/show').'" class="btn btn-info btn-circle"><i class="fa fa-eye"></i></a>';
          $all .= '<a href="'.url('/adminpanel/messages/' . $model->id . '/delete').'" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
          return $all;
        })
        ->make(true);
    }
}
