@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<<<<<<< HEAD
                    Ini adalah halaman login
=======
                    You are logged in!
>>>>>>> de1c90e802ee56900484c60b574014ca83e8f73b
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
