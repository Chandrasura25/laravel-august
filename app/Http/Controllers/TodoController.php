<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
   public function create(Request $request){
      // return $newName;
      //  return $request->all();
      //  return $request->todo_name;
      // dd($request);
      $request->validate([
         "todo_desc" => "required|min:5|max:100",
         "todo_name" => "required|min:4|max:20",
         "image" => "image|required|mimes:png,jpg,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000",
      ]);
      $newName = time().$request ->image->getClientOriginalName();
      $request->image->move(public_path('images'),$newName);
     $insert = DB::table('todo_tb')->insert([
        'todo_name' => $request->todo_name,
        'todo_desc' => $request->todo_desc,
        "user_id"=>auth()->user()->user_id,
        "image_name" => $newName,
     ]); 
     return redirect('/todo');
   //      $insert = DB::table('todo_tb')->insert([
   //      'todo_name' => $request->todo_name,
   //      'todo_desc' => $request->todo_des,
   //      "user_id"=> 1,
   //   ]);
   //   $resp =[];
   //   if($insert){
   //    $resp['success']=true;
   //   }
   //   else{
   //    $resp['success'] = false;
   //   }
     
   //   return json_encode($resp);
   }
   // public function read(){
   //   $todos= DB::table('todo_tb')->get();
   //   return view('todo.todo', ["todos"=>$todos]);
   // }
   public function read(){
       $user_id = auth()->user()->user_id;
      $todos= DB::table('todo_tb')->where('user_id',$user_id)->get();
      // joining using query buider
      // $todos= DB::table('todo_tb')->join('users',"todo_tb.user_id",'=','users.user_id')->get();
      // return $todos;
      return view('todo.todo', ["todos"=>$todos]);
    }
   public function destroy($todo_id){
       DB::table('todo_tb')->where('todo_id',$todo_id)->delete();
      return redirect('/todo');
   }
   public function edit($todo_id){
      $todo = DB::table('todo_tb')->where('todo_id',$todo_id)->first();
      return view('todo.editTodo', ["todo"=>$todo]);
   }
   public function update(Request $request, $todo_id){
       DB::table('todo_tb')
                 ->where('todo_id', $todo_id)
                 ->update([   
                 'todo_name' => $request->todo_name,
                 'todo_desc' => $request->todo_des
            ]);
      return redirect('/todo');
   }
}
