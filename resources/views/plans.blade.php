@extends('layouts.auth')

@section('htmlheader_title')
    Other Pricing Table
@endsection


@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="text-center">Free package</h4>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead">
                            <strong>$0 / month</strong>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">
                            Personal Use
                            <span class="glyphicon glyphicon-ok pull-right"></span>
                        </li>
                        <li class="list-group-item">
                            No Commercial License
                            <span class="glyphicon glyphicon-ok pull-right"></span>
                        </li>
                        <li class="list-group-item">
                            No Commercial license
                            <span class="glyphicon glyphicon-remove pull-right"></span>
                        </li>
                        <li class="list-group-item">
                            NO Technical Support
                            <span class="glyphicon glyphicon-ok pull-right"></span>
                        </li>
                    </ul>
                    <div class="panel-footer">
                        <a href="{{url('register')}}" class="btn btn-lg btn-block btn-info">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="text-center">Premium commercial package</h4>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead">
                            <strong>$20 / month</strong>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">
                            Personal Use
                            <span class="glyphicon glyphicon-ok pull-right"></span>
                        </li>
                        <li class="list-group-item">
                            Single Commercial License
                            <span class="glyphicon glyphicon-ok pull-right"></span>
                        </li>
                        <li class="list-group-item">
                            Multiple site Commercial license
                            <span class="glyphicon glyphicon-ok pull-right"></span>
                        </li>
                        <li class="list-group-item">
                            Technical Support
                            <span class="glyphicon glyphicon-ok pull-right"></span>
                        </li>
                    </ul>
                    <div class="panel-footer">
                        <a href="{{url('register_subscription')}}" class="btn btn-lg btn-block btn-primary">Register Subscription</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection