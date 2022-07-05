@extends('layouts.panel')
@section('Products')
    active
@endsection
@section('Product')
    active
@endsection
@section('title')
    products
@endsection
@section('content')


    <div class="main-content side-content pt-0">
        <div class="container-fluid">
            <div class="inner-body">


                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Product management</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product list</li>
                        </ol>
                    </div>
                </div>
                <!-- End Page Header -->

                <!--Row-->
                <div class="row row-sm">
                    <div class="col-sm-12 col-lg-12 col-xl-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body pl-0">
                                <div class="col-12">
                                    <div class="container">

                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-create">
                                            Create Product
                                        </button>
                                        <!-- Create Modal -->
                                        <div class="modal fade" id="modal-create" data-backdrop="static">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Create product</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- form start -->

                                                        <form method="POST"
                                                              action="{{route('products.store')}}"
                                                              enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label for="exampleInputFile">Product Image</label>
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" name="image"
                                                                                   class="custom-file-input"
                                                                                   id="exampleInputFile">
                                                                            <label class="custom-file-label"
                                                                                   for="exampleInputFile">Choose
                                                                                file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Name</label>
                                                                    <input name="name" type="text"
                                                                           class="form-control"
                                                                           id="exampleInputEmail1"
                                                                           placeholder="Enter name" required
                                                                           >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">description</label>
                                                                    <textarea name="description" id="" cols="30"
                                                                              rows="10">

                                                                            </textarea>
                                                                </div>
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" name="in_stock"
                                                                           value="1" class="form-check-input"
                                                                           id="exampleCheck1"
                                                                           checked >
                                                                    <label class="form-check-label"
                                                                           for="exampleCheck1">In Stock</label>
                                                                </div>

                                                                <div class="form-group ">
                                                                    <label for="exampleInputEmail1">Price</label>
                                                                    <div class="input-group mb-2">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text">$
                                                                            </div>
                                                                        </div>
                                                                        <input type="number"
                                                                               class="form-control"
                                                                               id="inlineFormInputGroup"
                                                                               name="price"
                                                                               placeholder="Price">
                                                                    </div>
                                                                </div>

                                                                <div id="accordion">
                                                                    <div class="card">
                                                                        <div class="card-header"
                                                                             id="headingTwo">
                                                                            <h5 class="mb-0">
                                                                                <button type="button"
                                                                                        class="btn btn-link collapsed mb-3"
                                                                                        data-toggle="collapse"
                                                                                        data-target="#collapseTwo"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="collapseTwo">
                                                                                    <h5>Ingredients</h5>
                                                                                </button>
                                                                            </h5>
                                                                        </div>
                                                                        <div id="collapseTwo" class="collapse"
                                                                             aria-labelledby="headingTwo"
                                                                             data-parent="#accordion">
                                                                            <div class="card-body"
                                                                                 id="ingredients">
                                                                                <button type="button"
                                                                                        class="text-center btn btn-success mt-3 ingredientsAppendButton"
                                                                                        style="width: 100%">+
                                                                                </button>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card">
                                                                        <div class="card-header"
                                                                             id="headingThree">
                                                                            <h5 class="mb-0">
                                                                                <button type="button"
                                                                                        class="btn btn-link collapsed mb-3"
                                                                                        data-toggle="collapse"
                                                                                        data-target="#collapseThree"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="collapseThree">
                                                                                    <h5>Nutrition</h5>
                                                                                </button>
                                                                            </h5>
                                                                        </div>
                                                                        <div id="collapseThree" class="collapse"
                                                                             aria-labelledby="headingThree"
                                                                             data-parent="#accordion">
                                                                            <div class="card-body"
                                                                                 id="nutrition">
                                                                                <button type="button"
                                                                                        class="text-center btn btn-success mt-3 nutritionAppendButton"
                                                                                        style="width: 100%">+
                                                                                </button>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <!-- /.card-body -->

                                                            <div class="card-footer">
                                                                <button type="submit" class="btn btn-primary">
                                                                    Submit
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- products table -->
                                        <table id="table" class="table table-bordered table-striped text-center">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Product Image image</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Created</th>
                                                <th>Options</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($products as $key => $product)
                                                <tr>
                                                    <td>{{$key + 1}}</td>
                                                    <td>
                                                        <img src="{{url($product->image)}}" alt=""
                                                             style="width: 100px;height: 100px">
                                                    </td>
                                                    <td>
                                                        {{$product->name}}
                                                    </td>
                                                    <td>$ {{$product->price}}</td>
                                                    <td>
                                                        <button class="btn btn-default" data-toggle="tooltip"
                                                                data-placement="top" title="{{$product->created_at}}">
                                                            {{$product->created_at->diffForHumans()}}
                                                        </button>
                                                    </td>
                                                    <td class="text-center">
                                                        <button class="btn btn-default dropdown-toggle" type="button"
                                                                id="dropdownMenuButton" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-sliders-h"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                            <button type="button" class="btn btn-success dropdown-item"
                                                                    data-toggle="modal"
                                                                    data-target="#modal-edit{{$product->id}}"><i
                                                                        class="fas fa-product-edit"></i> Edit
                                                            </button>
                                                            <button type="button" class="dropdown-item"
                                                                    data-toggle="modal"
                                                                    data-target="#modal-delete{{$product->id}}"><i
                                                                        style="color:red"
                                                                        class="fas fa-product-minus"></i> Delete
                                                            </button>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <!-- Delete Modal -->
                                                <div class="modal fade" id="modal-delete{{$product->id}}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Delete product</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>Are you sure to delete `{{$product->name}}` ?</h5>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">Close
                                                                </button>
                                                                <form action="{{route('products.destroy',$product->id)}}"
                                                                      method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">
                                                                        Delete
                                                                    </button>

                                                                </form>

                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- /.modal -->

                                                <!-- /.modal -->
                                                <!-- Change Modal -->
                                                <div class="modal fade" id="modal-edit{{$product->id}}"
                                                     data-backdrop="static">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit product</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- form start -->
                                                                <form method="POST"
                                                                      action="{{route('products.update',$product->id)}}"
                                                                      enctype="multipart/form-data"
                                                                      onsubmit="submitUpdate()"
                                                                >
                                                                    @csrf
                                                                    @method('PATCH')
                                                                    <div class="card-body">
                                                                        <div class="form-group text-center">
                                                                            <img src="{{url($product->image)}}" alt=""
                                                                                 style="width: 150px;height: 150px">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputFile">Product Image</label>
                                                                            <div class="input-group">
                                                                                <div class="custom-file">
                                                                                    <input type="file" name="image"
                                                                                           class="custom-file-input"
                                                                                           id="exampleInputFile">
                                                                                    <label class="custom-file-label"
                                                                                           for="exampleInputFile">Choose
                                                                                        file</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Name</label>
                                                                            <input name="name" type="text"
                                                                                   class="form-control"
                                                                                   id="exampleInputEmail1"
                                                                                   placeholder="Enter name"
                                                                                   value="{{$product->name}}" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Categories</label>
                                                                            <select name="categories[]" class="form-control s2" style="width: 100%" multiple>
                                                                                @foreach($categories as $category)
                                                                                    <option value="{{$category->id}}" @if(in_array($category->id,$product->categories()->pluck('id')->toArray())) selected @endif >{{$category->name}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">description</label>
                                                                            <textarea name="description" id="" cols="30"
                                                                                      rows="10">
                                                                                {{$product->description}}
                                                                            </textarea>
                                                                        </div>
                                                                        <div class="form-group form-check">
                                                                            <input type="checkbox" name="in_stock"
                                                                                   value="1" class="form-check-input"
                                                                                   id="exampleCheck1"
                                                                                   @if($product->in_stock == 1) checked @endif >
                                                                            <label class="form-check-label"
                                                                                   for="exampleCheck1">In Stock</label>
                                                                        </div>

                                                                        <div class="form-group ">
                                                                            <label for="exampleInputEmail1">Price</label>
                                                                            <div class="input-group mb-2">
                                                                                <div class="input-group-prepend">
                                                                                    <div class="input-group-text">$
                                                                                    </div>
                                                                                </div>
                                                                                <input type="number"
                                                                                       name="price"
                                                                                       class="form-control"
                                                                                       id="inlineFormInputGroup"
                                                                                       placeholder="Price"
                                                                                       value="{{$product->price}}">
                                                                            </div>
                                                                        </div>

                                                                        <div id="accordion">
                                                                            <div class="card">
                                                                                <div class="card-header"
                                                                                     id="headingTwo">
                                                                                    <h5 class="mb-0">
                                                                                        <button type="button"
                                                                                                class="btn btn-link collapsed mb-3"
                                                                                                data-toggle="collapse"
                                                                                                data-target="#collapseTwo"
                                                                                                aria-expanded="false"
                                                                                                aria-controls="collapseTwo">
                                                                                            <h5>Ingredients</h5>
                                                                                        </button>
                                                                                    </h5>
                                                                                </div>
                                                                                <div id="collapseTwo" class="collapse"
                                                                                     aria-labelledby="headingTwo"
                                                                                     data-parent="#accordion">
                                                                                    <div class="card-body"
                                                                                         id="ingredients">
                                                                                        <button type="button"
                                                                                                class="text-center btn btn-success mt-3 ingredientsAppendButton"
                                                                                                style="width: 100%">+
                                                                                        </button>

                                                                                        @if(is_array(json_decode($product->ingredients)))
                                                                                            @foreach(json_decode($product->ingredients) as $key => $ingredient)
                                                                                                <div class="row mt-3 mx-auto "
                                                                                                     style="width: 100%">
                                                                                                    <div class="col-10">
                                                                                                        <input type="text"
                                                                                                               value="{{$ingredient}}"
                                                                                                               class="form-control "
                                                                                                               name="ingredients[]">
                                                                                                    </div>
                                                                                                    <div class="col-2">
                                                                                                        <button type="button"
                                                                                                                class="btn btn-danger  removeItem"
                                                                                                                style="width: 100%">
                                                                                                            <i class="fas fa-trash-alt"></i>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            @endforeach
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card">
                                                                                <div class="card-header"
                                                                                     id="headingThree">
                                                                                    <h5 class="mb-0">
                                                                                        <button type="button"
                                                                                                class="btn btn-link collapsed mb-3"
                                                                                                data-toggle="collapse"
                                                                                                data-target="#collapseThree"
                                                                                                aria-expanded="false"
                                                                                                aria-controls="collapseThree">
                                                                                            <h5>Nutrition</h5>
                                                                                        </button>
                                                                                    </h5>
                                                                                </div>
                                                                                <div id="collapseThree" class="collapse"
                                                                                     aria-labelledby="headingThree"
                                                                                     data-parent="#accordion">
                                                                                    <div class="card-body nutritionUpdate"
                                                                                    >
                                                                                        <button type="button"
                                                                                                class="text-center btn btn-success mt-3 nutritionAppendButton"
                                                                                                style="width: 100%">+
                                                                                        </button>
                                                                                        @if(is_array(json_decode($product->nutrition)))
                                                                                            @foreach(json_decode($product->nutrition) as $key => $nutritionItem)
                                                                                                <div class="row mt-3 mx-auto "
                                                                                                     style="width: 100%">
                                                                                                    <div class="col-10">
                                                                                                        <input type="text"
                                                                                                               value="{{$nutritionItem}}"
                                                                                                               class="form-control "
                                                                                                               name="nutrition[]">
                                                                                                    </div>
                                                                                                    <div class="col-2">
                                                                                                        <button type="button"
                                                                                                                class="btn btn-danger  removeItem"
                                                                                                                style="width: 100%">
                                                                                                            <i class="fas fa-trash-alt"></i>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            @endforeach
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <!-- /.card-body -->

                                                                    <div class="card-footer">
                                                                        <button type="submit" class="btn btn-primary">
                                                                            Submit
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- /.modal -->


                                            @endforeach

                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row end -->


                </div>
            </div>
        </div>
    </div>


@endsection
@section('js')
    <script>
        function makeid(length) {
            var result = '';
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var charactersLength = characters.length;
            for (var i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() *
                    charactersLength));
            }
            return result;
        }

        $(".ingredientsAppendButton").on('click', function () {
            let randId = makeid(8)
            let parentDiv = $(this).parent().append(`
<div class="row mt-3 mx-auto " style="width: 100%">
                                                                                                    <div class="col-10">
                                                                                                        <input type="text"
                                                                                                               class="form-control "
                                                                                                               name="ingredients[]">
                                                                                                    </div>
                                                                                                    <div class="col-2">
                                                                                                        <button type="button" class="btn btn-danger  " style="width: 100%" onclick="removeItem(this)">
                                                                                                            <i class="fas fa-trash-alt" ></i>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
            `);
        })

        $(".nutritionAppendButton").on('click', function () {
            let randId = makeid(8)
            let parentDiv = $(this).parent().append(`
<div class="row mt-3 mx-auto " style="width: 100%">
                                                                                                    <div class="col-10">
                                                                                                        <input type="text"
                                                                                                               class="form-control "
                                                                                                               name="nutrition[]">
                                                                                                    </div>
                                                                                                    <div class="col-2">
                                                                                                        <button type="button" class="btn btn-danger  " style="width: 100%" onclick="removeItem(this)">
                                                                                                            <i class="fas fa-trash-alt" ></i>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
            `);
        })
        $(".removeItem").on('click', function () {
            $(this).parent().parent().remove()
        })

        function removeItem(item) {
            $(item).parent().parent().remove()
        }

    </script>
@endsection