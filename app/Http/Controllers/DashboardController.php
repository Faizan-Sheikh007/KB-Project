<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function switchRole(Request $request)
    {
        $request->validate(['role'=>'required']);

        if (!auth()->user()->roles->contains('name', $request->role)) {
            abort(403, 'Unauthorized role.');
        }

        auth()->user()->update([
            'current_role'=>$request->role
        ]);

        return back()->with('success','Role switched successfully');
    }
}
