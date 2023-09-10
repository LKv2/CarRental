<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        // Add any logic to retrieve data for the admin dashboard
        return view('client.dashboard');
    }
}
