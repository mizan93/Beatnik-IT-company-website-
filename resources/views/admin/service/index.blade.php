@extends('admin.layouts.app')
@section('title')
    service Us
@endsection
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-left">
                    <a href="{{ route('service.create') }}" class="btn btn-primary">Add New</a>
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">All service <span class="badge badge-info display-4">{{ $service->count()}}</span></h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Name</th>

                                <th>Description</th>

                                <th>Created At</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($service as $key=>$service)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $service->name }}</td>
                                            <td>{{ Str::limit($service->details, 40, '...') }}</td>
                                            <td>{{ $service->created_at->toFormattedDateString() }}</td>
                                            <td>
                                                <a href="{{ route('service.show',$service->id) }}" class="btn btn-primary btn-sm">view</a>
                                                <a href="{{ route('service.edit',$service->id) }}" class="btn btn-info btn-sm">edit</a>
                                                <form id="delete-form-{{ $service->id }}" action="{{ route('service.destroy',$service->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $service->id }}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }">delete</button>


                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush
