<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {


        $validated = $request->validate([
            'username' => 'required',
            'email' => 'unique:App\Models\User,email',
            'password' => 'required|min:8|confirmed',

        ]);
        $validated['password'] = Hash::make($request->password);
        $validated['admin'] = 0;
        $validated['pendingorder'] = 1;
        User::create($validated);
        return redirect('/login');
    }
}
