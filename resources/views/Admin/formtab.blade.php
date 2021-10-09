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

            <h2 class="panel-title">Form Elements</h2>
        </header>
        <div class="panel-body">
            <form class="form-horizontal form-bordered" method="get">

                <div class="form-group">
                    <label class="col-md-3 control-label">Left Icon</label>
                    <div class="col-md-6">
                        <div class="input-group input-group-icon">
														<span class="input-group-addon">
															<span class="icon"><i class="fa fa-user"></i></span>
														</span>
                            <input type="text" class="form-control" placeholder="Left icon">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Right Icon</label>
                    <div class="col-md-6">
                        <div class="input-group input-group-icon">
                            <input type="text" class="form-control" placeholder="Right icon">
                            <span class="input-group-addon">
															<span class="icon"><i class="fa fa-user"></i></span>
														</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Search</label>
                    <div class="col-md-6">
                        <div class="input-group input-search">
                            <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                            <span class="input-group-btn">
															<button class="btn btn-default" type="submit"><i
                                                                    class="fa fa-search"></i></button>
														</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Vertical Group</label>
                    <div class="col-md-6">
                        <section class="form-group-vertical">
                            <input class="form-control" type="text" placeholder="Username">
                            <input class="form-control" type="text" placeholder="Email">
                            <input class="form-control last" type="password" placeholder="Password">
                        </section>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Vertical Group w/ icon</label>
                    <div class="col-md-6">
                        <section class="form-group-vertical">
                            <div class="input-group input-group-icon">
															<span class="input-group-addon">
																<span class="icon"><i class="fa fa-user"></i></span>
															</span>
                                <input class="form-control" type="text" placeholder="Username">
                            </div>
                            <div class="input-group input-group-icon">
															<span class="input-group-addon">
																<span class="icon"><i class="fa fa-key"></i></span>
															</span>
                                <input class="form-control" type="text" placeholder="Password">
                            </div>
                        </section>
                    </div>
                    <div class="col-xs-12">
                        <section class="panel">
                            <div class="panel-body">
                                <form class="form-horizontal form-bordered">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Summernote</label>
                                        <div class="col-md-9">
                                            <div class="summernote" data-plugin-summernote
                                                 data-plugin-options='{ "height": 250, "codemirror": { "theme": "ambiance" } }'>
                                                Start typing...
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('pageScript')
@endsection
