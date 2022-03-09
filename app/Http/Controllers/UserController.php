<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','DESC')->paginate(15);
        if($key = request()->key){
            $users = User::orderBy('id','DESC')->where('name','like','%'.$key.'%')
                                                                ->orWhere('company','like','%'.$key.'%')                    
                                                                ->orWhere('phone',$key)
                                                                ->orWhere('email',$key)
                                                                ->paginate(5);
        }
        return view('pages.user.indexUser')->with(compact('users'));
    }


    public function create()
    {
        return view('pages.user.createUser');
    }

    
    public function store(User $user, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'company' => 'required'
        ]);

        $user = User::create($request->all());
        $user->save();

        return redirect()->route('user.index')->with('success', 'Insert Successfully!!!');
    }


    public function show($user)
    {

        $users = User::find($user);
        return view('pages.user.showUser')->with(compact('users'));
    }



    public function update(Request $request,$user)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'company' => 'required'
        ]);
        $data = request()->all();
        $users = User::find($user);
        $users->name = $data['name'];
        $users->phone = $data['phone'];
        $users->address = $data['address'];
        $users->email = $data['email'];
        $users->company = $data['company'];
        $users->save();
        return redirect()->route('user.index')->with('success', 'Updated Successfully!!!');
    }


    public function destroy($user)
    {

        $users = User::find($user);
        $users->delete();
        return redirect()->back();

    }

    public function test (){
        $users = User::orderBy('id','DESC')->paginate(15);
        return view('pages.user.userList')->with(compact('users'));
    }

}
