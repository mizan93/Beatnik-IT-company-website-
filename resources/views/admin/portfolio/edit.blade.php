@extends('admin.layouts.app')

@section('title','Portfolio')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('portfolio.index') }}" class="btn btn-danger">Back</a>

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Edit portfolio</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('portfolio.update',$portfolio->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Select Category</label>
                                            <select class="form-control" name="category" >
                                                <option disabled selected></option>
                                                @foreach($categories as $category)
                                                    <option 
                                                   {{ $category->id==$portfolio->category_id ? 'selected' : '' }}
                                                    value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Client</label>
                                            <input type="text" class="form-control" name="client" value="{{ $portfolio->client }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Project Image(you can select more than one image)</label>
                                        <input type="file" name="image_id[]" multiple>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Project URL</label>
                                            <input type="text" class="form-control" name="pro_url" value="{{ $portfolio->pro_url }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Project Title</label>
                                            <input type="text" class="form-control" name="title"  value="{{ $portfolio->title }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Description</label>
                                            <textarea class="form-control description" name="details">
                                                {{ $portfolio->details }}
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
        selector:'textarea.description',

    });
</script>
@endpush
