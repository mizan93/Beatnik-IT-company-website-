@extends('admin.layouts.app')
@section('title')
    Service
@endsection

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('service.index') }}" class="btn btn-danger">Back</a>

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="name">Add New Service</h4>
                        </div>
                        <div class="card-content">
                            <form  action="{{ route('service.update',$service->id) }}" method="POST" >
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{$service->name}}">

                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Description</label>
                                            <textarea class="form-control details" name="details">
                                            {{$service->details}}
                                            </textarea>
                                        </div>
                                        </div>
                                    </div>


                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
<script src="{{ asset('backend/tinymce/tinymce.js') }}"></script>
<script>
    tinymce.init({
        selector:'textarea.details',

    });
</script>
<script>
    $(document).ready(function() {
  $("#quickForm").validate({
      rules:{
        name:{
            required: true,
        },
        details:{
            required: true,
        },

      },
  });
});
</script>
@endpush
