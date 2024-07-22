@extends('backend.layouts.app')
@section('title', 'User Management')
@section('content')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-4"><i class="fa fa-user"></i> User Table</h5>
                    <a href="{{ route('users.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create New </a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @forelse ($user as $item)
                            <tr>
                                <th scope="row" class="p-3">{{ $loop->iteration }}</th>
                                <td class="p-3">{{ ucwords($item->name) }}</td>
                                <td class="p-3">{{ $item->email }}</td>
                                <td class="p-3">
                                    <span class="badge rounded-pill bg-success">Admin</span>
                                </td>
                                <td class="p-3">
                                    <a href="#" class="btn btn-square btn-primary" title="Detail user"><i class="fa fa-user"></i></a>
                                    <button type="button" onclick="deleteData('{{ route('users.destroy', $item->id) }}')" class="btn btn-square btn-dark" title="Delete user"><i class="fa fa-trash-alt"></i></button>
                                </td>
                            </tr>
                           @empty
                            <tr>
                                <td colspan="5" class="p-5 text-center"><i class="text-danger">No Data Available...</i></td>
                            </tr>
                           @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->
@endsection
