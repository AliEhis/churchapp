<?php

namespace App\Http\Controllers;

use App\SiteSetting;
use App\GeneralDetail;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function notfound()
    {
        $site = SiteSetting::first();
        $general = GeneralDetail::first();


        return view('errors.404', compact('site', 'general'));
    }

    public function fatal()
    {
        $site = SiteSetting::first();
        $general = GeneralDetail::first();


        return view('errors.505', compact('site', 'general'));
    }





}




