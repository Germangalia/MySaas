@extends('layouts.app')

@section('htmlheader_title')
    Shotout
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Shotout</div>
                    <form role="form" action="#" method="post" enctype="plain">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name1">Your Name</label>
                            <input type="name" name="Name" class="form-control" id="name1" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label>Your Text</label>
                            <textarea class="form-control" name="Message" rows="3"></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-large btn-success">SUBMIT</button>
                    </form>
                    <div class="panel-body">
                        You are in shotout!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@yield('scripts')