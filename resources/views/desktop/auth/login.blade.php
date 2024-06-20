@extends('desktop.layout.master')

@section('css')
    
@endsection

@section('content')
    <div class="container text-white d-flex flex-column justify-content-center align-items-center text-white">
        @if(session('error'))
        <div class="alert alert-danger" style="width:100%">
            <b>Opps!</b> {{session('error')}}
        </div>
        @endif
        <div class="container border border-2 border-white rounded p-5 mx-auto bg-dark" style="max-width: 350px;width:100%;margin-top:150px;">
            <form action="{{ route('login.auth') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="form-label">Email address</label>
                    <input type="text" name="email" class="form-control @error('email') is-error @enderror" id="email">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-error @enderror" id="password">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mx-auto form-control">Login</button>
            </form>                  
        </div>
    </div>
@endsection
    
