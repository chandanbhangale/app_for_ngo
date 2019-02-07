@extends('layouts.dash')

@section('page_heading')
    Events
@endsection

@section('section')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header card-header-icon card-header-info">
                <div class="card-icon">
                    <i class="material-icons">add</i>
                </div>
                <h4 class="card-title">Add new event</h4>
            </div>
            <div class="card-body">
                <a href=" {{ url('/admin/addevents') }} " class="btn btn-info pull-right">Add</a>
            </div>
        </div>
    </div>
</div>
<br><br>
<h2>Upcoming Events</h2>
<br>
<div class="row">
    @foreach ($events as $event)
    <div class="col-md-4">
        <div class="card card-profile">
            <div class="card-avatar">
                <a href="#pablo">
                    <img class="img" src=" {{ URL::to('images/default-avatar.jpg') }} ">
                </a>
            </div>
            <div class="card-body">
                <p>Name : {{ $event->e_name }} </p>
                <p>Head : {{ $event->e_head }} </p>
                <p>Date : {{ $event->e_date }} </p>
                <p>Venue : {{ $event->e_address }} </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

@section('custom-scripts')

<script>
    $("#members").addClass("active");


</script>

@endsection