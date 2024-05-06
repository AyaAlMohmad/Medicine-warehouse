@extends('dashboard.layout.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">



                <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
                    action="{{ route('products.store') }}">
                    @csrf
                    <div class="widget-main">


                        <div class="form-group">
                            <label for="name">
                                Name
                            </label>

                            <input class="form-control" required type="text" name="name">
                            @error('name')
                                <div>{{ $message }}</div>
                            @enderror

                        </div><br><br>

                        <div class="form-group">
                            <label> Description</label>
                            <div>
                                <textarea name="description" class="form-control" placeholder="Description" rows="5"></textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="price">
                                Price

                            </label>

                            <input class="form-control" required type="text" name="price" value="">
                            @error('price')
                                <div>{{ $message }}</div>
                            @enderror

                        </div><br><br>

                        <div class="form-group">
                            <label for="category_id">
                                Category
                            </label>
                            <select name="category_id" id="category_id">
                                <option value=" ">Select ..
                                </option>
                                @foreach ($items as $item)
                                    <option value="{{ $item->id }}">{{ $item->company->name }} => {{ $item->name }}
                                    </option>
                                @endforeach
                            </select>

                        </div>




                        <div class="card-body">

                            <h4 class="mt-0 header-title">Image</h4>


                            <div class="m-b-30">
                                <form action="#" class="dropzone">
                                    <div class="fallback">
                                        <input name="image" type="file">
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6 control-label no-padding-right">
                                <button type="submit" class="btn btn-sm btn-primary"><i
                                        class="fa fa-save"></i>save</button>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <script>
        function previewFile(input) {
            var file = $("input[type=file]").get(0).files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function() {
                    $("#previewImage").attr("src", reader.result);
                }
                reader.readAsDataURL(file);


            }
        }
    </script>
@endsection
