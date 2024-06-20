@extends('desktop.layout.master')

@section('content')
    <div class="container text-white d-flex justify-content-center align-items-center" style="width: 600px">
        <div class="container border border-2 border-white rounded p-5 mx-auto bg-dark" style="max-width: 350px;width:100%;margin-top:150px;">
            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-error @enderror" id="name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
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
                <div class="mb-5">
                    <label for="password" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control @error('password') is-error @enderror" id="password">
                </div>
                <button type="submit" class="btn btn-primary mx-auto form-control">Register</button>
            </form>                  
        </div>
    </div>
@endsection
    
