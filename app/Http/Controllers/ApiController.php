<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Fecades\Hash;

class ApiController extends Controller
{
    public function users(Request $request){
        $users=User::all();
        return response()->json($users);
    }
}
