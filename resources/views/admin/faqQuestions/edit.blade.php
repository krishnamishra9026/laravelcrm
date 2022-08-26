@extends('admin.app')
@section('content')

<div class="card">
    <div class="card-header">
        Edit Faq Question
    </div>

    <div class="card-body">
        <form action="{{ route("admin.faq-questions.update", [$faqQuestion->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('question') ? 'has-error' : '' }}">
                <label for="question">Question*</label>
                <textarea id="question" name="question" class="form-control " required>{{ old('question', isset($faqQuestion) ? $faqQuestion->question : '') }}</textarea>
                @if($errors->has('question'))
                    <em class="invalid-feedback">
                        {{ $errors->first('question') }}
                    </em>
                @endif
                
            </div>
            <div class="form-group {{ $errors->has('answer') ? 'has-error' : '' }}">
                <label for="answer">Answer*</label>
                <textarea id="answer" name="answer" class="form-control " required>{{ old('answer', isset($faqQuestion) ? $faqQuestion->answer : '') }}</textarea>
                @if($errors->has('answer'))
                    <em class="invalid-feedback">
                        {{ $errors->first('answer') }}
                    </em>
                @endif
                
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="Save">
            </div>
        </form>


    </div>
</div>
@endsection