<?php

namespace App\Http\Controllers\Pages;

use App\Models\sc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServerController extends Controller
{
    public function index(): View
    {
        return view('pages.servers');
    }

    public function show($id)
    {
        return view('pages.server');
    }

    public function play($id)
    {
        return "<h1 class='text-2xl font-mono text-color p-6'>Играть на сервере  $id</h1>";
    }
}
