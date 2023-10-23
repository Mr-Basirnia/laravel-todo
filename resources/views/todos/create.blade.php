@extends('layouts.app')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">

            {{-- @include('sections.errors') --}}

            <form class="my-5" action="{{ route('todos.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="todoTitle" class="form-label">
                        عنوان Todo :
                    </label>
                    <input type="text" class="form-control" id="todoTitle" name="todoTitle" value="{{ old('todoTitle') }}">
                    @error('todoTitle')
                        <p class="invalid-feedback d-block">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control p-1" placeholder="Leave a decription here" id="tododecription" style="height: 100px"
                        name="todoDecription">
                        {{ old('todoDecription') }}
                    </textarea>
                    <label for="tododecription" class="float-end"> توضیحات Todo :</label>
                    @error('todoDecription')
                        <p class="invalid-feedback d-block">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">ایجاد کردن</button>
            </form>

        </div>
    </div>
@endsection
