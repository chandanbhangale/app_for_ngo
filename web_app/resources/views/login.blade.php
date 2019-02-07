@extends('layouts.dash')

@section('section')
{{-- <form action=" {{ url('/login') }} " method="POST">
    {{ csrf_field() }}

</form> --}}
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header card-header-icon card-header-info">
                <h4 class="card-title">Login</h4>
            </div>
            <div class="card-body">
                <form method="POST" action=" {{ url('/admin/login') }} ">
                    {{ csrf_field() }}
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-static">Username</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-static">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-info pull-right" value="Login">
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection