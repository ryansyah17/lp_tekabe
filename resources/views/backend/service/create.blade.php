@extends('backend.layouts.app')
@section('title', 'Service Creation')
@section('content')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-5">
                <h5 class="mb-4"><i class="fa fa-server"></i> Create Service</h5>
                <form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name<small class="text-danger">*</small> </label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description<small class="text-danger">*</small></label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="jpg, jpeg, png, webp">
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
                        <a href="{{ route('service.index') }}" class="btn btn-light"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->
@endsection
