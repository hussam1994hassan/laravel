@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    {{-- <img src="{{ URL('images/apple-iphone.gif') }}" alt="IPhone"> --}}
    <img src="{{ asset('storage/apple-iphone.gif') }}" alt="IPhone">
    {{-- <img src="images/apple-iphone.gif" alt="IPhone"> --}}


    @foreach ($users as $user)
        <div>
            <span>{{ $user['uname'] }}</span>
            <span>{{ $user['email'] }}</span>
            <span>{{ $user['points'] }}</span>
        </div>
    @endforeach

    @unless ($description)
        <h3>Description is Empty!</h3>
    @endunless

    @empty($description)
        <h3>Description is Empty!</h3>
    @endempty

    @if (empty($description))
        <h1>description is empty</h1>
    @endif

    @isset($name)
        <span>page name is isset</span>
    @endisset
@endsection
