@extends('dashboard.layout.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">


                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                           <th>Category </th>
                            <th>Company</th>
                            <th>Actions</th>

                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($items as $data)
                            <tr>
                                <td><img style="width: 90px; height: 90px;"
                                        src="{{ asset('images/product/' . $data->image) }}">
                                </td>

                                <td>{{ $data->name }}</td>
                                <td>{{ $data->price }}</td>

                              
                                <td>{{ $data->category->name }}</td>
                                <td>{{ $data->category->company->name }}</td>
                    


                                    <td>
                                        <a  href="{{ route('products.restore', $data->id) }}">
                                            <i class="ace-icon fa fa-undo bigger-120"> </i>
                                        </a>
                                        <a style="color:red" href="{{ route('products.finaldelete', $data->id) }}">
                                            <i class="ace-icon dripicons-trash bigger-120"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection
