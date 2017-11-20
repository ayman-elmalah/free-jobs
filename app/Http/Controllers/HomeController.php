<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Job;

class HomeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Job $job)
  {
    $jobs = $job->orderBy('id', 'desc')->paginate(24);
    $count = $jobs->count();
    $homepage = true;
    return view('main.home.index', compact('jobs', 'count', 'homepage'));
  }
}
