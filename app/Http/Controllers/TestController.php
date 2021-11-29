<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function users() {
        $user = User::all();

        return response()->json(['users' => $user]);
    }
}
