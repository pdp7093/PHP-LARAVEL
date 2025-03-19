@extends('website.layout.main')
@section('main')
    <section class="mt-5">
        <div class="container ">
            <div>

                <a href="{{(url('Add_product'))}}" class=" float-right btn btn-outline-primary ">Add Product</a>
                <div class="mt-5">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No#</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Image</th>
                                <th colspan="2" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0;?>
                            @foreach ($data as $d)
                                <tr>
                                    <td><?php echo ++$i?></td>
                                    <td>{{$d->name}}</td>
                                    <td>{{$d->price}}</td>
                                    <td><img src="{{url('website/'.$d->image)}}" alt="" width="50rm"></td>
                                    <td><a href="{{url('/delete/'.$d->id)}}" class="btn btn-warning">Delete Product</a></td>
                                    <td><a href="{{url('/edit/'.$d->id)}}" class="btn btn-info">Edit Product</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection