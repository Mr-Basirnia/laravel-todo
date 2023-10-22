@extends('layouts.app')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="todos my-5">

                <h4 class="my-3 text-center todo-title">
                    <mark> تسک های Todo</mark>
                </h4>

                <ol class="list-group list-group-numbered p-0 my-4">

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="ms-2 ms-auto me-3">

                            <h4>
                                لورم ایپسوم
                            </h4>

                            <p class="m-0">
                                <small>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                </small>
                            </p>

                        </div>

                        <a class="btn btn-danger btn-sm mx-2" href="#" role="button">پایان دادن</a>
                        <a class="btn btn-dark btn-sm mx-2" href="#" role="button">نمایش</a>

                    </li>

                </ol>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link text-bg-secondary" href="#">قبلی</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                        <li class="page-item"><a class="page-link text-bg-secondary" href="#">بعدی</a></li>
                    </ul>
                </nav>

            </div>

        </div>
    </div>
@endsection
