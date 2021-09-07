@extends('layouts.app')
@section('content')
<main>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Crud laravel</h1>
                <p class="lead text-muted"><img src="https://fastsnippets.com/wp-content/uploads/2021/04/cropped-logo.png" /></p>
                <p>
                    <a href="{{route('categories.create')}}" class="btn btn-primary my-2">Add new Category</a>
                    <a href="{{route('products.create')}}" class="btn btn-success my-2">Add new Product</a>

                </p>

            </div>
        </div>
    </section>


</main>

@endsection