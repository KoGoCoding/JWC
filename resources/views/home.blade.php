@extends('layouts.app')

@section('content')
<div class="container">
        <div class="card">
            <div class="card-header"><h4>Comments List</h4></div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                @foreach ($comments as $comment)
                    <div class="alert alert-warning">
                        <b>Name : </b>{{ $comment['name'] }}
                        <br>
                        <p>{{ $comment['comment'] }}</p>
                        <br>
                        <div class="text-right">
                            {{ $comment['create_at'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
