@extends('admin.layouts.app')

@section('title')
question and ans
@endsection

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('question.index') }}" class="btn btn-danger">Back</a>

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="name">Edit question and ans</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('question.update',$question->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Question</label>
                                            <input type="text" class="form-control" name="question" value="{{ $question->question }}">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Ans</label>
                                    <textarea class="form-control details" name="ans">
                                        {{ $question->ans }}
                                    </textarea>
                                </div>
                                </div>
                            </div>
                                <button type="submit" class="btn btn-primary">update</button>
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
@endpush
