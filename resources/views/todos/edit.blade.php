@extends('layouts.app')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">

            {{-- @include('sections.errors') --}}

            <form class="my-5" action="{{ route('todos.update', ['id' => $todo->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="todoTitle" class="form-label">
                        ویرایش Todo :
                    </label>
                    <input type="text" class="form-control" id="todoTitle" name="todoTitle" value="{{ $todo->title }}">
                    @error('todoTitle')
                        <p class="invalid-feedback d-block">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control p-1" placeholder="Leave a decription here" id="tododecription" style="height: 200px"
                        name="todoDecription">
                        {{ $todo->description }}
                    </textarea>
                    <label for="tododecription" class="float-end"> توضیحات Todo :</label>
                    @error('todoDecription')
                        <p class="invalid-feedback d-block">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-warning">ویرایش کردن</button>
            </form>

        </div>
    </div>
@endsection
