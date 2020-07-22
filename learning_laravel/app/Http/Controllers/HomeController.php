<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function services()
    {
        // Model - Singular
        // Service

        // Database - Pluler
        // Services

        // $services = [
        //     'Service 1',
        //     'Service 2',
        //     'Service 3',
        //     'Service 4'
        // ];

        // $services = [];

        $services = \App\Service::all();

        // dd($services);

        return view('services', compact('services'));
    }
}
