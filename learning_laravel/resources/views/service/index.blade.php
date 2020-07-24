@extends('app')

@section('title', 'Services Page')

@section('content')
    <h1>Our Services</h1>

    <form action="/services" method="POST" >
        @csrf
    <input type="text" name="name" autocomplete="false" value="{{ old('name') }}">
        <button>Add Service</button>
    </form>
    <p style="color: red;">
        @error('name')
            {{ $message }}
        @enderror
    </p>
    <ul>
        @forelse ($services as $service)
            <li>{{$service->name}}</li>
        @empty
            <li>No Services Found</li>
        @endforelse
    </ul>
@endsection
