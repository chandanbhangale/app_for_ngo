@extends('layouts.dash')

@section('page_heading')
    Add Event
@endsection

@section('section')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-icon card-header-info">
                <div class="card-icon">
                    <i class="material-icons">perm_identity</i>
                </div>
                <h4 class="card-title">Add Event</h4>
            </div>
            <div class="card-body">
                <form method="POST" action=" {{ url('admin/events') }} ">
                    {{ csrf_field() }}
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-static">Event Name</label>
                                <input type="text" class="form-control" name="e_name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-static">Description</label>
                                <textarea name="e_details" class="form-control" cols="100" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-static">Head</label><br>
                                <input type="email" class="form-control" name="e_head">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-static">Date</label>
                                <input type="date" class="form-control datetimepicker" name="e_date">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-static">Amount</label>
                                <input type="number" class="form-control" name="e_amount">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-static">Venue</label>
                                <input type="password" class="form-control" name="e_addr">
                            </div>
                        </div>
                    </div>

                    <input type="submit" class="btn btn-info pull-right" value="Add">
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection