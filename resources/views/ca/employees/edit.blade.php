@extends("ca.layouts.app")

@section("contentheader_title")
    <a href="{{ url(config('crmadmin.adminRoute') . '/employees') }}">Employee</a> :
@endsection
@section("contentheader_description", $employee->$view_col)
@section("section", "Employees")
@section("section_url", url(config('crmadmin.adminRoute') . '/employees'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Employees Edit : ".$employee->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
    <div class="box-header">

    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {!! Form::model($employee, ['route' => [config('crmadmin.adminRoute') . '.employees.update', $employee->id ], 'method'=>'PUT', 'id' => 'employee-edit-form']) !!}
                    @ca_form($module)

                    {{--
                    @ca_input($module, 'name')
          					@ca_input($module, 'designation')
          					@ca_input($module, 'gender')
          					@ca_input($module, 'mobile')
          					@ca_input($module, 'mobile2')
          					@ca_input($module, 'email')
          					@ca_input($module, 'dept')
          					@ca_input($module, 'city')
          					@ca_input($module, 'address')
          					@ca_input($module, 'about')
          					@ca_input($module, 'date_birth')
          					@ca_input($module, 'date_hire')
          					@ca_input($module, 'date_left')
          					@ca_input($module, 'salary_cur')
                    --}}
                    <br>
                    <div class="form-group">
                        {!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <a href="{{ url(config('crmadmin.adminRoute') . '/employees') }}" class="btn btn-default pull-right">Cancel</a>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
    $("#employee-edit-form").validate({

    });
});
</script>
@endpush
