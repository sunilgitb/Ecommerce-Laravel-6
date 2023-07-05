
@extends('admin.admin_layouts')

@section('admin_content')

<h1>Manage Color</h1>

<a href="{{ url('admin/color') }}"><button type="submit" class="btn btn-success">Back</button></a>

<div class="row m-t-30">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('color.manage_color_process') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <lable for="color" class="control-label">
                                    Color
                                </lable>
                                <input type="text" class="form-control"  aria-required="true" aria-invalid="false" required>
                            </div>
                            <div class="">
                                <button class="btn btn-info btn-lg btn-block">
                                    Submit
                                </button>
                                <input type="hidden" name="id" value="{{ $id }}"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
