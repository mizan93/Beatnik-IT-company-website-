@extends('admin.layouts.app')
@section('title')
    About Us
@endsection
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-left">
                    @if ($about->count()>0)
                    <h3>About us section</h3>
                    @else
                    <a href="{{ route('about-us.create') }}" class="btn btn-primary">Add New</a>

                    @endif
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            {{-- <h4 class="title">All about <span class="badge badge-info display-4">{{ $categories->count()}}</span></h4> --}}
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Description</th>

                                <th>Created At</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($about as $key=>$about)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><img  src="{{ url('storage/about-us/'.$about->image) }}" class="img-fluid" alt="image" height="80" width="120" srcset=""></td>

                                            <td>{{  Str::limit($about->title, 30, '...')  }}</td>
                                            <td>{{  Str::limit($about->description, 20, '...')   }}</td>
                                            <td>{{ $about->created_at->toFormattedDateString() }}</td>
                                            <td>
                                                <a href="{{ route('about-us.edit',$about->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>


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
