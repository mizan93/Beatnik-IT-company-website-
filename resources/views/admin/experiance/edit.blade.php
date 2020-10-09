
                    @extends('admin.layouts.app')
                    @section('title','Company-experiance')

                    @push('css')

                    @endpush

                    @section('content')
                        <div class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('experiance.update',$experiance) }}" class="btn btn-danger">Back</a>

                                        <div class="card">
                                            <div class="card-header" data-background-color="purple">
                                                <h4 class="title">Create company experiance</h4>
                                            </div>
                                            <div class="card-content">
                                                <form method="POST" action="{{ route('experiance.update',$experiance->id) }}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Title</label>
                                                                <input type="text" class="form-control" name="title" value="{{ $experiance->title }}" >

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Description-1</label>
                                                                <textarea class="description" name="desc1" id="" cols="30" rows="10" >
                                                                    {{ $experiance->desc1 }}</textarea>

                                                            </div>
                                                            </div>
                                                        </div><div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Description-2</label>
                                                                    <textarea class="description" name="desc2" id="" cols="30" rows="10" >
                                                                        {{ $experiance->desc2 }} </textarea>

                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div><div class="row">
                                                            <div class="col-md-12">
                                                                    <label class="control-label">Image</label>
                                                                   <input type="file" name="image">


                                                                </div>
                                                            </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Clients</label>
                                                                <input type="text" class="form-control" name="client" value="{{ $experiance->client }}" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Projects</label>
                                                                <input type="text" class="form-control" name="project" value="{{ $experiance->project }}">


                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Hours of support</label>
                                                                <input type="text" class="form-control" name="support" value="{{ $experiance->support }}" >


                                                            </div>
                                                            </div>
                                                        </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Workers</label>
                                                               <input type="text" class="form-control" name="worker" value="{{ $experiance->worker }}">
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
