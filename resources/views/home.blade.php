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

                        <form action="{{ route('prize.generate') }}" method="POST">
                            {{ csrf_field() }}
                            @if (null === $prize)
                                <button class="btn btn-info">Generate prize</button>
                            @elseif(!$prize->is_received)
                                <h3>You have already had the prize. Please, <a
                                            href="{{ route('prize.index') }}">press</a> to received prize</h3>
                            @else
                                <h3>You have already received your prize</h3>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
