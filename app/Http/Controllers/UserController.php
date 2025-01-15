<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\User;
// use  App\Models\User;
class UserController extends Controller
{
    //
    function adduser(Request $req){
        // return $req->input();
        // return $req->name;
        $user = new User();
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=$req->password;
        $user->save();
        if($user){
            echo "new data added";
            // $data = DB::table('users')->get();
            // $data = User::all();
            
            return redirect('users');
        }else{
            return "error";
        }
       

        // $data = DB::table("users")->insert([
        //     "name"=>$req->name,
        //     "email"=>$req->email,
        //     "password"=>$req->password,
        // ]);
        // if($data){
        //     $data = DB::table('users')->get();

        //     return view('users',["data"=>$data]);
        // }else{
        //     return "error";
        // }
    }

    function user(Request $req){
        $req = User::paginate(4);
        return view('users',["data"=>$req]);
    }
    function delete($id){
        $isDeleted=User::destroy($id);
        if($isDeleted){
            $req = User::paginate(4);
            $data = view('users',["data"=>$req]);
            return redirect('users');
        }
    }
    function edit($id){
        $req = User::find($id);
        // echo $req;
        return view('editform',['data'=>$req]);
    }
    function updatedata(Request $req,$id){
        $user = User::find($id);
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=$req->password;
        $user->save();
        if($user){
            echo "new data added";
            // $data = DB::table('users')->get();
            // $data = User::all();
            
            return redirect('users');
        }else{
            return "error";
        }
    }
    function search(Request $req){
        $data=User::where('name','like',"%$req->search%")->paginate(3);
        return view('users',["data"=>$data],['sec'=>$req->search]);
    }
    function deletemut(Request $req){
        $isDeleted=User::destroy($req->ids);
        if($isDeleted){
            $req = User::paginate(4);
            $data = view('users',["data"=>$req]);
            return redirect('users');
        }else{
            return "error form deleteing";
        }
    }
}

