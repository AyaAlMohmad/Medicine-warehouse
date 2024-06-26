@extends('dashboard.layout.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">



                <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
                    action="{{ route('categories.update',$item->id) }}">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label>name</label>
                            <input type="text" name="name" class="form-control"  placeholder="name" value="{{ $item->name }}" />
                            @error('name')
                            <div style="color: red">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="company_id">
                                company
                            </label>
                            <select name="company_id" id="company_id">
                                <option value="">Select a company</option>
                                @foreach ($items as $company)
                                    <option value="{{ $company->id }}" {{ $company->id == $item->company_id ? 'selected' : '' }}>
                                        {{ $company->name }}
                                    </option>
                                @endforeach
                             </select>
                        </div>
                        <div class="form-group">

                            <div class="col-sm-6 control-label no-padding-right">
                                <button type="submit" class="btn btn-sm btn-primary">save</button>
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
