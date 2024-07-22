@extends('backend.layouts.app')
@section('title', 'User Creation')
@section('content')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-5">
                <h5 class="mb-4"><i class="fa fa-user"></i> Create User</h5>
                <form action="{{ route('users.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name<small class="text-danger">*</small> </label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email<small class="text-danger">*</small></label>
                        <input type="email" class="form-control" id="email" name="email">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password<small class="text-danger">*</small></label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
                        <a href="{{ route('users.index') }}" class="btn btn-light"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->
@endsection
