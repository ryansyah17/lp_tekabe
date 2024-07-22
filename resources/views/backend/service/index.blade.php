@extends('backend.layouts.app')
@section('title', 'Service Management')
@section('content')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-4"><i class="fa fa-server"></i> Service Table</h5>
                    <a href="{{ route('service.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create New </a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @forelse ($service as $item)
                            <tr>
                                <th scope="row" class="p-3">{{ $loop->iteration }}</th>
                                <td class="p-3">{{ ucwords($item->name) }}</td>
                                <td class="p-3"><small>{{ \Str::limit($item->description, 100, '...') }}</small></td>
                                <td class="p-3">
                                    <div class="d-flex justify-content-start align-items-center gap-2">
                                        <img src="{{ asset('uploads/img/service/'.$item->image) }}" width="50px" height="50px" alt="{{  $item->name  }}" style="border-radius: 5px">
                                        <br>
                                        <a href="{{ asset('uploads/img/service/'.$item->image) }}" target="_blank">
                                        <i class="fa fa-link"></i> <small> {{ $item->image }}</small>
                                        </a>
                                    </div>
                                </td>
                                <td class="p-3">
                                   @if ($item->status == 1)
                                    <span class="badge rounded-pill bg-success">Active</span>
                                   @else
                                    <span class="badge rounded-pill bg-danger">Non Active</span>
                                   @endif
                                </td>
                                <td class="p-3">
                                    <a href="{{ route('service.edit', $item->id) }}" class="btn btn-square btn-primary" title="Edit service"><i class="fa fa-edit"></i></a>
                                    <button type="button" onclick="deleteData('{{ route('service.destroy', $item->id) }}')" class="btn btn-square btn-dark" title="Delete user"><i class="fa fa-trash-alt"></i></button>
                                </td>
                            </tr>
                           @empty
                            <tr>
                                <td colspan="6" class="p-5 text-center"><i class="text-danger">No Data Available...</i></td>
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
