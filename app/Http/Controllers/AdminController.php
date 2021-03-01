<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('role:administrator');
    }

    public function index(){
        return Inertia::render('admin/Dashboard');
    }
}
