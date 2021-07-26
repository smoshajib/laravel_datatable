<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    public function index()
    {
        $users=User::all();
        return view('datatable.basic_table',compact('users'));
    }
    public function button_table()
    {
        $users=User::all();
        return view('datatable.pdf_print_table',compact('users'));
    }
    public function get_button_table()
    {
        $users=User::all();
        return response()->json($users);
    }
    
}
