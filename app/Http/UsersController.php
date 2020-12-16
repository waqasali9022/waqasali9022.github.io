<?php

namespace App\Http;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    function login(Request $req){
   
        $user=User::where(['email'=>$req->email ]);

        if ($user || Hash::check($req->password, $user->password)) 
        {
        
          return redirect('blog');  
  
                
         
        }
        else {
          $req->session()->put('user',$user); 
         
          }

        }
        
      }

