@extends('Layout.mainLayout')
@section('titleMain', 'Nguyen Van Quy - Form Tab')
@section('title', 'Form tab')
@section('main')
    <section class=" ">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Add new event</h2>
        </header>
        <div class="panel-body">
            <form class="form-horizontal form-bordered" method="post" action="/form">
                @csrf
                <div class="form-group">
                    <label class="col-md-3 control-label">Event Name</label>
                    <div class="col-md-6">
                        <div class="input-group input-group-icon">
                            <input type="text" name="eventName" class="form-control" placeholder="Event Name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Band Name</label>
                    <div class="col-md-6">
                        <div class="input-group input-group-icon">
                            <input type="text" name="bandNames" class="form-control" placeholder="Band Name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Start Date</label>
                    <div class="col-md-6">
                        <div class="input-group input-group-icon">
                            <input type="date" name="startDate" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">End Date</label>
                    <div class="col-md-6">
                        <div class="input-group input-group-icon">
                            <input type="date" name="endDate" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Portfolio</label>
                    <div class="col-md-6">
                        <div class="input-group input-group-icon">
                            <input type="text" name="portfolio" class="form-control" placeholder="Portfolio">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Ticket Price</label>
                    <div class="col-md-6">
                        <div class="input-group input-group-icon">
                            <input type="text" name="ticketPrice" class="form-control" placeholder="Ticket Price">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Status</label>
                    <div class="col-md-6">
                        <div class="input-group input-group-icon">
                            <input type="text" name="status" class="form-control" placeholder="Status">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8">
                        <div class="input-group input-group-icon">
                            <button class="mb-xs mt-xs mr-xs btn btn-primary" style="float: right">Submit</button>
                            <button type="button" class="mb-xs mt-xs mr-xs btn btn-danger" style="float: right">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('pageScript')
@endsection
