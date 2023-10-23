@extends('layouts.app')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="todos my-5">

                <div class="d-flex align-items-center">

                    <h4 class="my-3 text-center todo-title d-inline-block">
                        <mark> تسک های Todo</mark>
                    </h4>

                    <a href="{{ route('todos.create') }}" class="me-auto btn btn-outline-danger" role="button">
                        ایجاد Todo
                    </a>

                </div>

                <ol class="list-group list-group-numbered p-0 my-4">

                    @foreach ($todos as $index => $todo)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="ms-2 ms-auto me-3">

                                <h4>{{ $todo->title }}</h4>

                                <p class="m-0">
                                    <small>
                                        {{ Str::limit($todo->description, 50, ' ...') }}
                                    </small>
                                </p>

                            </div>

                            <a class="btn btn-dark btn-sm mx-2" href="{{ route('todos.show', ['id' => $todo->id]) }}"
                                role="button">
                                نمایش
                            </a>

                            @if (!$todo->isCompleted)
                                <form action="{{ route('todos.done', ['id' => $todo->id]) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-outline-secondary btn-sm float-start mx-1">
                                        تغییر به انجام شده
                                    </button>
                                </form>
                            @endif

                        </li>
                    @endforeach

                </ol>
            </div>
            {{ $todos->links() }}

        </div>

    </div>
    </div>
@endsection
