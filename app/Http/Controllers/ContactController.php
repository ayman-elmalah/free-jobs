<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AddMessage;
use App\Message;
use DB;

class ContactController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('main.contact.index');
  }

  /**
   * submit contact form.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function submit(AddMessage $request, Message $message)
  {
    DB::table('messages')->insert([
      'name' => $request->name,
      'email' => $request->email,
      'subject' => $request->subject,
      'message' => $request->message,
      'view' => '0',
      'created_at' => time(),
    ]);

    return redirect('/')->withFlashMessage(' تم ارسال الرساله بنجاح ');
  }
}
