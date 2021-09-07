@extends('layouts.app')
@section('content')
<main>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Crud laravel - Products</h1>
                <p class="lead text-muted"><img src="https://fastsnippets.com/wp-content/uploads/2021/04/cropped-logo.png" /></p>
                <p>
                    <a href="{{route('products.create')}}" class="btn btn-primary my-2">Add new Product</a>

                </p>

            </div>
        </div>
    </section>

    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">price</th>
                    <th scope="col">category</th>
                    <th scope="col">description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                    <a class="btn btn-success" href="{{route('products.edit' , $product->id)}}">Update</a>
                    <a class="btn btn-info" href="{{route('products.show' , $product->id)}}">View</a>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>


            </tbody>
        </table>

    </div>

</main>

@endsection