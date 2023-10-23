@extends('layouts.app')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card my-5 text-bg-dark">
                <div class="card-header">
                    وضعیت : <mark>{{ Str::is(0, $todo->isCompleted) ? 'انجام نشده' : 'انجام شده' }}</mark>

                    <form action="{{ route('todos.delete', ['id' => $todo->id]) }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm float-start mx-1">
                            پاک کردن
                        </button>
                    </form>

                    <a class="btn btn-warning btn-sm float-start mx-1" href="{{ route('todos.edit', ['id' => $todo->id]) }}"
                        role="button">
                        ویرایش
                    </a>
                    {{-- @if (!$todo->isCompleted) --}}
                    <form action="{{ route('todos.done', ['id' => $todo->id]) }}" method="POST" class="d-inline">
                        @csrf
                        @method('put')
                        <button class="btn btn-success btn-sm float-start mx-1">
                            تغییر وضعیت
                        </button>
                    </form>
                    {{-- @endif --}}

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
