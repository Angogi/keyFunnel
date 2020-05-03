@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="logout" aria-labelledby="">
    <a class="" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        <h4>{{ __('Logout') }}</h4>
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>

<free-evaluations></free-evaluations>
<contacts></contacts>

@endsection
