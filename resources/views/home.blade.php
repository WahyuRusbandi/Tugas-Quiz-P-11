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

                    {{ __('Welcome To The PLN Application!') }}

                </div>
            </div>
        </div>
    </div>
</div>
<p>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Thank You For Login In Here!') }}

                </div>
                <div class="card-footer">{{ __('Copyright') }}
                 &copy; 2023. By  
                  <a href="https://www.instagram.com/wahyursbnd/" target="__blank">Wahyu Rusbandi Husni Nasution</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
