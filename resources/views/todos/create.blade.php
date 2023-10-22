@extends('layouts.app')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">

            <form class="my-5" action="{{ route('todos.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="todoTitle" class="form-label">
                        عنوان Todo :
                    </label>
                    <input type="text" class="form-control" id="todoTitle" name="todoTitle">
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control p-1" placeholder="Leave a decription here" id="tododecription" style="height: 100px"
                        name="todoDecription">
                    </textarea>
                    <label for="tododecription" class="float-end"> توضیحات Todo :</label>
                </div>
                <button type="submit" class="btn btn-primary">ایجاد کردن</button>
            </form>

        </div>
    </div>
@endsection
