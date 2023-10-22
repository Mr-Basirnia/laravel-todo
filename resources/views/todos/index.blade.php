@extends('layouts.app')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="todos my-5">

                <h4 class="my-3 text-center todo-title">
                    <mark> تسک های Todo</mark>
                </h4>

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

                            <a class="btn btn-danger btn-sm mx-2" href="#" role="button">پایان دادن</a>
                            <a class="btn btn-dark btn-sm mx-2" href="#" role="button">نمایش</a>

                        </li>
                    @endforeach

                </ol>
            </div>
            {{ $todos->links() }}

        </div>

    </div>
    </div>
@endsection
