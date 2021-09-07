@extends('layouts.app')
@section('content')
<main>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Crud laravel - Categories</h1>
                <p class="lead text-muted"><img src="https://fastsnippets.com/wp-content/uploads/2021/04/cropped-logo.png" /></p>
                <p>
                    <a href="{{route('categories.create')}}" class="btn btn-primary my-2">Add new Category</a>

                </p>

            </div>
        </div>
    </section>

    <div class="container">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if($categories->count() > 0)
                @foreach($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                    <a class="btn btn-success" href="{{route('categories.edit' , $category->id)}}">Update</a>
                    <a class="btn btn-info" href="{{route('categories.show' , $category->id)}}">View</a>
                        <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>

                    <p>No Categories yet <a href="{{route('categories.create')}}">Create your first category</a></p>
                </tr>
                @endif


            </tbody>
        </table>
        {!! $categories->links() !!}

    </div>

</main>

@endsection