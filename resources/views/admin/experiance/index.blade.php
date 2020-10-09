@extends('admin.layouts.app')
@section('title','Company-experiance')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-left">
                    @if ($experiance->count()>0)
<h3>Company experiance</h3>
                    @else
                    <a href="{{ route('experiance.create') }}" class="btn btn-primary">Add New</a>

                    @endif
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            {{-- <h4 class="title">All experiance <span class="badge badge-experiance display-4">{{ $experiances->count()}}</span></h4> --}}
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>Title</th>
                                <th>desc-1</th>
                                <th>desc-2</th>
                                <th>Clients</th>
                                <th>Projects</th>
                                <th>Hours of support </th>
                                <th>workers</th>

                                <th>Linkdin</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($experiance as $key=>$experiance)
                                        <tr>

                                             <td>{{ $experiance->title }}</td>
                                            <td>{!! $experiance->desc1 !!}</td>
                                            <td>{!! $experiance->desc2 !!}</td>
                                            <td>{{  $experiance->client}}</td>
                                            <td>{{ $experiance->project }}</td>
                                            <td>{{ $experiance->support }}</td>
                                            <td>{{ $experiance->worker }}</td>

                                            {{-- <td>{{ $experiance->created_at->toFormattedDateString() }}</td> --}}
                                            <td>
                                                <a href="{{ route('experiance.edit',$experiance->id) }}" class="btn btn-experiance btn-sm"><i class="material-icons">mode_edit</i></a>

                                                <form id="delete-form-{{ $experiance->id }}" action="{{ route('experiance.destroy',$experiance->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $experiance->id }}').submit();
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
