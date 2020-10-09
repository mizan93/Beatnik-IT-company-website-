@extends('admin.layouts.app')
@section('title','Company-info')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-left">
                    @if ($info->count()>0)
<h3>Company Info</h3>
                    @else
                    <a href="{{ route('company-info.create') }}" class="btn btn-primary">Add New</a>

                    @endif
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            {{-- <h4 class="title">All info <span class="badge badge-info display-4">{{ $infos->count()}}</span></h4> --}}
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Facebook </th>
                                <th>TeeWter</th>
                                <th>Google plus</th>
                                <th>Linkdin</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($info as $key=>$info)
                                        <tr>

                                             <td>{{ $info->address }}</td>
                                            <td>{{ $info->email }}</td>
                                            <td>{{ $info->phone }}</td>
                                            <td>{{  $info->fb_link}}</td>
                                            <td>{{ $info->tw_link }}</td>
                                            <td>{{ $info->insta_link }}</td>
                                            <td>{{ $info->ln_link }}</td>

                                            {{-- <td>{{ $info->created_at->toFormattedDateString() }}</td> --}}
                                            <td>
                                                <a href="{{ route('company-info.edit',$info->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

                                                <form id="delete-form-{{ $info->id }}" action="{{ route('company-info.destroy',$info->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $info->id }}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
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
