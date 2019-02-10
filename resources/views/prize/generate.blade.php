@extends('layouts.app')

@section('content')
    <div class="container">
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
                        @if (null === $prize)
                            <h3>You have no any prizes</h3>
                        @else
                            @include($prize->includeViewName)
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
