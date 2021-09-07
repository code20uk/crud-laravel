@extends('layouts.app')
@section("content")
<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Edit <b> {{$category->name}} </b> Category</h1>
                <br />
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your data.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{route('categories.update' , $category->id)}}" method="post">
                @csrf
                @method('PUT')

                    <div class="row g-3">
                        <div class="col-12">
                            <input type="text" class="form-control" value="{{$category->name}}" placeholder="Enter Category" aria-label="category" name="category" required>
                        </div>
                        <div class="col-12 d-grid gap-2">
                            <button type="submit" class="btn btn-primary ">Submit</button>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </section>

</main>
@endsection