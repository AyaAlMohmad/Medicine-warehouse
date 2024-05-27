@extends('dashboard.layout.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">


                    <table id="itemtable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category</th>
                          
                            <th>Company</th>
                            <th>Description</th>
                            <th>Short Description</th>
                    

                        </tr>
                    </thead>


                    <tbody>
                      
                            <tr>
                                <td><img style="width: 90px; height: 90px;"
                                        src="{{ asset('images/product/' . $item->image) }}">
                                </td>

                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }}</td>

                         
                                <td>{{ $item->category->name }}</td>
                                <td>{{ $item->category->company->name }}</td>

                                <td style="word-break: break-all;">{{ $item->description }}</td>
                                <td style="word-break: break-all;">{{ $item->short_description }}</td>


                                </tr>
                          
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection
