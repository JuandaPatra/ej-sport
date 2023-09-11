<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $commentCount = Comments::all()->count();


        $isAdmin = Auth::user();

        if($isAdmin->email != 'syahril.anwar@b7leap.com' && $isAdmin->email != 'super@admin.com'){
           return redirect('/');
        }


        $users = User::orderBy('created_at', 'DESC')->get();
        $userCount = $users->count();
        return view('home', compact('users', 'commentCount', 'userCount'));
    }
}
