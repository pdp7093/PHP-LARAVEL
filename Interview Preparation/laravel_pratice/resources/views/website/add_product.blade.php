@extends('website.layout.main')
@section('main')
    <section class="mt-5">
        <div class="container ">
            <div>
                
                    <a href="{{(url('/Add_product'))}}" class=" float-right btn btn-outline-info ">Back</a>
                <div class="mt-5">
                    <form action="{{url('/update')}}" method="post" enctype="multipart/form-data" class="p-3 border border-3">
                        @csrf
                        <div class="form-group mt-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" name="name" value="" class="form-control">
                            @error('name')
                                <p>{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="price" class="form-label">Product Price</label>
                            <input type="num" name="price" placeholder="Enter Product Price" class="form-control">
                            @error('price')
                                <p>{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="image" class="form-label">Product Image</label>
                            <input type="file" name="image" placeholder="Enter Product Image" class="form-control">
                            @error('image')
                                <p>{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            
                            <input type="submit" name="submit" value="Submit" class="form-control btn btn-outline-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection