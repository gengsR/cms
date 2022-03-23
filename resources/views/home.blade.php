@extends('layouts.app')

@section('content')
<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <table class="table table-responsive">
                        <tr><th>Username</th><th>:</th><td>{{ $user->username }}</td></tr>
                        <tr><th>
@endsection
