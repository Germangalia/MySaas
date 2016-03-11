<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pratt - Free Bootstrap 3 Theme">
    <meta name="author" content="Alvarez.is - BlackTie.co">

    <title>New TODO Android Application</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/js/smoothscroll.js') }}"></script>


</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>TODOS German</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#home" class="smothscroll">Home</a></li>
                <li><a href="#desc" class="smothscroll">Product</a></li>
                <li><a href="#showcase" class="smothScroll">Price</a></li>
                <li><a href="#contact" class="smothScroll">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/plans') }}">Register</a></li>
                @else
                    <li><a href="/home">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<section id="home" name="home"></section>
<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <h1>New <b><a href="https://play.google.com/store/apps/details?id=com.ggalia84.ggalia84.todos">TODOS German</a></b></h1>
                <h3>A <a href="https://laravel.com/">Android</a> TODO list for all of your thinks!</h3>
                <h3><a href="{{ url('/plans') }}" class="btn btn-lg btn-success">Get Started!</a></h3>
            </div>
            <div class="col-lg-2">
                <h5>Amazing TODOS list.</h5>
                <p>Based on Material Design</p>
                <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow1.png') }}">
            </div>
            <div class="col-lg-8">
                <img class="img-responsive" src="{{ asset('/img/app-todos.png') }}" alt="">
            </div>
            <div class="col-lg-2">
                <br>
                <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow2.png') }}">
                <h5>Awesome packaged...</h5>
                <p>... by <a href="https://github.com/Germangalia">German Galià</a> is ready to use with Google Play!</p>
            </div>
        </div>
    </div> <!--/ .container -->
</div><!--/ #headerwrap -->


<section id="desc" name="desc"></section>
<!-- INTRO WRAP -->
<div id="intro">
    <div class="container">
        <div class="row centered">
            <h1>Designed To Android</h1>
            <br>
            <br>
            <div class="col-lg-4">
                <img src="{{ asset('/img/intro01.png') }}" alt="">
                <h3>Community</h3>
                <p>See <a href="https://github.com/Germangalia/TodosAndroid">Github project</a>, post <a href="https://github.com/Germangalia/TodosAndroid/issues">issues</a> and <a href="https://github.com/Germangalia/TodosAndroid/pulls">pull requests</a></p>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset('/img/todos-icono.png') }}" alt="">
                <h3>TODOS List</h3>
                <p>The Amazing TODOS List for all your thinks.</p>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset('/img/todos-save.png') }}" alt="">
                <h3>Advanced Save</h3>
                <p>Keep all your thinks in the cloud.</p>
            </div>
        </div>
        <br>
        <hr>
    </div> <!--/ .container -->
</div><!--/ #introwrap -->

<!-- FEATURES WRAP -->
<div id="features">
    <div class="container">
        <div class="row">
            <h1 class="centered">What's New?</h1>
            <br>
            <br>
            <div class="col-lg-6 centered">
                <img class="centered" src="{{ asset('/img/todos-full.png') }}" alt="">
            </div>

            <div class="col-lg-6">
                <h3>Some Features</h3>
                <br>
                <!-- ACCORDION -->
                <div class="accordion ac" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                First Class Design
                            </a>
                        </div><!-- /accordion-heading -->
                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                Retina Ready Theme
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                Awesome Support
                            </a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                Material Design
                            </a>
                        </div>
                        <div id="collapseFour" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>
                </div><!-- Accordion -->
            </div>
        </div>
    </div><!--/ .container -->
</div><!--/ #features -->


<section id="showcase" name="showcase"></section>
<div id="showcase">
    <div class="container">
        <div class="row">
            <h1 class="centered">Some Screenshots</h1>
            <br>
            <div class="col-lg-8 col-lg-offset-2">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{ asset('/img/todos-list.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/todos-add.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div><!-- /container -->
</div>


<section id="contact" name="contact"></section>
<div id="footerwrap">
    <div class="container">
        <div class="col-lg-5">
            <h3>Address</h3>
            <p>
                Av. Constitució 987,<br/>
                Ulldecona,<br/>
                90873<br/>
                Spain
            </p>
        </div>

        <div class="col-lg-7">
            <h3>Drop Us A Line</h3>
            <br>
            <form role="form" action="#" method="post" enctype="plain">
                <div class="form-group">
                    <label for="name1">Your Name</label>
                    <input type="name" name="Name" class="form-control" id="name1" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <label for="email1">Email address</label>
                    <input type="email" name="Mail" class="form-control" id="email1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label>Your Text</label>
                    <textarea class="form-control" name="Message" rows="3"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-large btn-success">SUBMIT</button>
            </form>
        </div>
    </div>
</div>
<div id="c">
    <div class="container">
        <p>
            <a href="https://play.google.com/store/apps/details?id=com.ggalia84.ggalia84.todos"></a><b>TODOS GERMAN</b></a>.<br/>
            <strong>Copyright &copy; 2015 .</strong> Created by <a href="https://github.com/Germangalia">German Galià</a>. See code at <a href="https://github.com/Germangalia/TodosAndroid">Github</a>

        </p>

    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
