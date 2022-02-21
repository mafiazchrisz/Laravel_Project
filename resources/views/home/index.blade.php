@extends('layouts.app-master')

@section('content')
<div class="bg-light p-5 rounded">
    @auth
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title-m-b-md">
                Product Store
            </div>
            <div class="links">
                <a href="{{ config('app.url')}}/products"> View Products </a>
            </div>
        </div>
    </div>
    @endauth

    @guest
    <h1>Homepage</h1>
    <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
    @endguest
</div>
@endsection