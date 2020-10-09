@extends('admin.layouts.app')
@section('title','Company-info')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    {{-- @include('layouts.partial.msg') --}}
                    {{-- <a href="{{ route('info.index') }}" class="btn btn-danger">Back</a> --}}

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Edit company info</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('company-info.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email</label>
                                            <input type="text" class="form-control" name="email"  >

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Phone</label>
                                            <input type="text" class="form-control" name="phone" value="{{ $info->phone }}" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Address</label>
                                            <input type="text" class="form-control" name="address" >


                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">City</label>
                                            <input type="text" class="form-control" name="city"  >


                                        </div>
                                        </div>
                                    </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Description</label>
                                        <textarea class="description" name="details" id="" cols="30" rows="10" >
                                            {{ $info->details }}</textarea>

                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">FaceBook link</label>
                                           <input type="text" class="form-control" name="fb_link" value="{{ $info->fb_link }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Twitter link</label>
                                           <input type="text" class="form-control" name="tw_link" value="{{ $info->tw_link }}" class="@error('tw_link') is-invalid @enderror">
                                           @error('tw_link')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Instagram link</label>
                                           <input type="text" class="form-control" name="gplus_link" value="{{ $info->insta_link }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Linkedin link</label>
                                           <input type="text" class="form-control" name="ln_link" value="{{ $info->ln_link }}" >
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
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
