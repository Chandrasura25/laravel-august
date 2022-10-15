<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $name = 'Asura';
        $age = 12;
        // compact
        // return view('home',compact('name','age'));
        
     $users =[
      'name' =>'Asura',
      'department' => 'SE'
     ];

        // with
        // return view('home')->with('name',$name);
        // return view('home')->with('users',$users);

        // using direct method
        return view('home', [
            'age'=>$age,
            'name'=>$name,
            'users' =>$users
        ]);
    }
    public function show($title){
        $users =[
            'name' =>'Asura',
            'department' => 'SE'
           ];
        
       return view('welcome',[
       'product'=> $users[$title] ?? 'title'. $title.'not found']);
    }
}
