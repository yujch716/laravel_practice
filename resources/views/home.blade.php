@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <br><br>
            <a href="/tasks" class="font-bold text-2xl">
                <button class="bg-blue-400 text-white hover:bg-blue-500 px-3 py-1">Go Tasks List</button>
            </a>
            <a href="/mytasks" class="font-bold text-2xl">
                <button class="bg-yellow-300 text-white hover:bg-yellow-400 px-3 py-1">Go My Tasks List</button>
            </a>
        </div>
    </div>
</div>
@endsection
