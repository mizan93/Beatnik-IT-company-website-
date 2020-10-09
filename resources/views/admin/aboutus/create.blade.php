@extends('admin.layouts.app')
@section('title')
    About Us
@endsection

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('about-us.index') }}" class="btn btn-danger">Back</a>

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="name">Add New </h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('about-us.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Title</label>
                                            <textarea class="form-control title" name="title">
                                            </textarea>

                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Description</label>
                                            <textarea class="form-control description" name="description">
                                            </textarea>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="control-label">Image</label>
                                            <input type="file" name="image" >

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
        selector:'textarea.description',

    });
</script>
<script>
    tinymce.init({
        selector:'textarea.title',

    });
</script>
<script>
    $(document).ready(function() {
  $("#quickForm").validate({
      rules:{
        name:{
            required: true,
        },
        code:{
            required: true,
        },
        price:{
            required: true,
            number:true
        },
        category:{
            required: true,
        },
        brand:{
            required: true,
        },

        description:{
            required: true,
        },
      },
  });
});
</script>
@endpush
