<?php

namespace Elegant\Admin\Http\Controllers;

use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin::dashboard.index');
    }
}