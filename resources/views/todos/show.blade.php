@extends('layouts.app')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card my-5 text-bg-dark">
                <div class="card-header">
                    وضعیت : <mark>{{ Str::is(0, $todo->isCompleted) ? 'انجام نشده' : 'انجام شده' }}</mark>

                    <a class="btn btn-danger btn-sm float-start mx-1" href="#" role="button">پاک کردن</a>
                    <a class="btn btn-warning btn-sm float-start mx-1" href="{{ route('todos.edit', ['id' => $todo->id]) }}"
                        role="button">
                        ویرایش
                    </a>
                    @if (!$todo->isCompleted)
                        <a class="btn btn-success btn-sm float-start mx-1" href="#" role="button">تغییر وضعیت</a>
                    @endif

                </div>
                <div class="card-body">
                    <h1 class="">
                        {{ $todo->title }}
                    </h1>
                    <blockquote class="blockquote mb-0">
                        <p class="lead">
                            {{ $todo->description }}
                        </p>
                    </blockquote>
                </div>
            </div>

        </div>
    </div>
@endsection
