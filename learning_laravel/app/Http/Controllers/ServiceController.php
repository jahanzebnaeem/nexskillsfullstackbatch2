<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
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

        return view('service.index', compact('services'));

    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:3'
        ]);

        \App\Service::create($data);
        // dd(request('name'));

        // $service = new \App\Service();
        // $service->name = request('name');
        // $service->save();

        return redirect()->back();
    }
}
