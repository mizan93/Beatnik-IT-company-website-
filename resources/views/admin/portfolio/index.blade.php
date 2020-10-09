@extends('admin.layouts.app')
@section('title')
    Portfolio
@endsection
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-left">
                    <a href="{{ route('portfolio.create') }}" class="btn btn-primary">Add New</a>
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            {{-- <h4 class="title">All portfolio <span class="badge badge-info display-4">{{ $portfolio->count()}}</span></h4> --}}
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>ID</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Client</th>
                                <th>URL</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created At</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($portfolio as $key=>$portfolio)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $portfolio->category->name }}</td>
                                            @php
                                                $i=1;
                                            @endphp
                                            @foreach ($portfolio->imgs as $image)
                                            @if ($i>0)
                                            <td><img src="{{ url('storage/portfolio/'.$image->image) }}" class="img-responsive" alt="{{ $image->image }}" srcset=""></td>
                                            @endif
                                            @php
                                                $i--;
                                            @endphp
                                            @endforeach
                                            <td>{{ $portfolio->client }}</td>
                                            <td>{{ $portfolio->pro_url }}</td>
                                            <td>{{ $portfolio->title }}</td>
                                            <td>{{ Str::limit($portfolio->details, 40, '...') }}</td>
                                            <td>{{ $portfolio->created_at->toFormattedDateString() }}</td>
                                            <td>
                                                <a href="{{ route('portfolio.show',$portfolio->id) }}" class="btn btn-primary btn-sm">view</a>
                                                <a href="{{ route('portfolio.edit',$portfolio->id) }}" class="btn btn-info btn-sm">edit</a>
                                                <form id="delete-form-{{ $portfolio->id }}" action="{{ route('portfolio.destroy',$portfolio->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $portfolio->id }}').submit();
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
