@extends('app')

@section('title', 'Services Page')

@section('content')
    <h1>Our Services</h1>
    <ul>
        {{-- @foreach ($services as $service)
            <li>{{$service}}</li>
        @endforeach --}}
        @forelse ($services as $service)
            <li>{{$service->name}}</li>
        @empty
            <li>No Services Found</li>
        @endforelse
    </ul>
@endsection
