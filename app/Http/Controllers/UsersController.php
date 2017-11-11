<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AddAdmin;
use App\Http\Requests\EditAdmin;
use App\User;
use Datatables;
use Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddAdmin $request, User $user)
    {
      $user->create([
          'name' => $request->name,
          'email' => $request->email,
          'password' => bcrypt($request->password),
      ]);
      return redirect('adminpanel/users')->withFlashMessage(' تمت اضافة المسئول بنجاح ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, User $user)
    {
        $user = $user->find($id);
        $show = true;
        return view('admin.users.show', compact('user', 'show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
      $id = Auth::user()->id;
      $user = $user->find($id);
      return view('admin.users.editprofile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\EditAdmin  $request
     * @return \Illuminate\Http\Response
     */
    public function update(EditAdmin $request, User $user)
    {
      $id = Auth::user()->id;
      $userUpdated = $user->find($id);

      $userUpdated->fill(array_except($request->all(), ['password']))->save();
      if ($request->password) {
          $password = Hash::make($request->password);
          $userUpdated->fill(['password' => $password])->save();
      }
      return redirect()->back()->withFlashMessage(' تم التعديل على عضويتك بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, User $user)
    {
      if ($id != 1) {
        $user->find($id)->delete();
        return redirect('adminpanel/users')->withFlashMessage(' تم حذف العضو بنجاح ');
      } else {
        return redirect('adminpanel/users')->withFlashMessage(' لا يمكن حذف العضو ');
      }
    }

    public function anyData(User $user)
    {
      $users = $user->all();
      return DataTables::of($users)
        ->editColumn('name', function ($model) {
          return \Html::link('/adminpanel/users/' . $model->id . '/show', $model->name);
        })
        ->editColumn('control', function ($model) {
          $all = '';
          if($model->id != 1 && Auth::user()->id == 1){
            $all .= '<a href="'.url('/adminpanel/users/' . $model->id . '/delete').'" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
          }
          return $all;
        })
        ->make(true);
    }
}
