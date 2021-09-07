@extends('layouts.app')
@section("content")
<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Create new Product</h1>
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
                <form action="{{route('products.store')}}" method="post">
                @csrf

                    <div class="row g-3">
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Enter Product name" aria-label="Product name" name="name" required>
                        </div>
                        <div class="col-12">
                            <input type="number" class="form-control" placeholder="Enter Product price" aria-label="Product price" name="price" required>
                        </div>
                        <div class="col-12">
                            <select name="category"  class="form-control" required>
                                <option selected disabled value="">Select product cateogry</option>
                                @foreach($categories as $category)
                                <option  value="{{$category->id}}">{{$category->name}}</option>

                                @endforeach
                            </select> 
                        </div>
                        <div class="col-12">
                            <textarea  rows="9" class="form-control" placeholder="Enter Product description" aria-label="Product description" name="description" required> </textarea>
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