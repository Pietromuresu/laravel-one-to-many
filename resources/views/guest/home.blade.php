@extends('layouts.guest')


@section('content')

<div class="jumbotronbg-light rounded-3">
    <div class="container d-flex align-items-center justify-content-center vh-100">
        @guest
        <h1 class="text-danger">Guest Home (not logged in)</h1>
        @else
        <h1 class="text-success">Guest Home ( logged in)</h1>

        @endguest

    </div>
</div>
@endsection
