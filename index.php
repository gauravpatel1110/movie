<!DOCTYPE html>
<html>
<head>
    <base href="/movie/">
    <title>Movies</title>

    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <style>
        .bg-dark {
            background-color: black !important;
        }

        .heading {
            margin-bottom: 100px;
            text-align: center;
        }

        .heading > h1, .heading > h2 {
            font-size: 40px;
            font-family: 'Nunito', 'Helvetica', 'Arial', sans-serif;
            text-transform: capitalize;
            line-height: 46px;
            font-weight: 300;
        }

        .heading > h1, .heading > h2, .heading > h4, .heading > p {
            margin-bottom: default-bottom-margin;
        }

        .heading-text {
            margin-bottom: 30px;
        }

        .heading-text h1, .heading-text h2, .heading-text h3, .heading-text h4, .heading-text h5, .heading-text h6 {
            position: relative;
            margin-bottom: 30px;
        }

        .heading-text h1 {
            font-size: 70px;
            font-weight: 600;
        }

        .heading-text h2 {
            font-size: 60px;
            margin-bottom: 30px;
            letter-spacing: -0.7px;
            line-height: 66px;
        }

        .heading-text p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .heading-text.heading-gradient h2 > * {
            -webkit-text-fill-color: transparent !important;
            -webkit-background-clip: text !important;
            background: radial-gradient(circle at left top, #4b72ff 9%, #2250fc 48%, #6442ff 91%);
        }

        .heading-text.heading-section > h2 {
            position: relative;
            font-size: 48px;
            line-height: 56px;
            margin-bottom: 60px;
        }

        .heading-text.heading-section > h2:before {
            content: "";
            position: absolute;
            height: 2px;
            width: 100px;
            background-color: #2250fc;
            bottom: -30px;
            left: 0;
            right: 0;
        }

        .heading-text.heading-section.text-center h1:before, .heading-text.heading-section.text-center h2:before, .heading-text.heading-section.text-center h3:before, .heading-text.heading-section.text-center h4:before, .heading-text.heading-section.text-center h5:before, .heading-text.heading-section.text-center h6:before {
            margin: 0 auto;
        }

        .heading-text.heading-section.text-right h1:before, .heading-text.heading-section.text-right h2:before, .heading-text.heading-section.text-right h3:before, .heading-text.heading-section.text-right h4:before, .heading-text.heading-section.text-right h5:before, .heading-text.heading-section.text-right h6:before {
            right: 0;
            left: auto;
        }

        .heading-text.heading-section p {
            font-size: 18px;
            font-weight: 300;
            line-height: 22px;
        }

        .heading-text.heading-section p span {
            font-weight: 600;
        }

        .heading-text.heading-plain > h2 {
            font-size: 56px;
            line-height: 56px;
            font-family: initial;
        }

        .heading-text.heading-plain p {
            font-size: 20px;
            font-weight: 300;
            line-height: 30px;
        }

        .heading-text.heading-plain p span {
            font-weight: 600;
        }

        .heading-text.heading-light > h2 {
            font-size: 59px;
            font-weight: 100;
            letter-spacing: -1px;
            line-height: 70px;
        }

        .heading-text.heading-light p {
            font-size: 17px;
            font-weight: 300;
            line-height: 30px;
            margin-bottom: 20px;
        }

        .heading-text.heading-light p span {
            font-weight: 600;
        }

        .heading-text.heading-vintage > h2 {
            border: 2px solid #fff;
            display: inline-block;
            padding: 8px 21px;
            margin-bottom: 30px;
        }

        .heading-text.heading-vintage p {
            font-size: 17px;
            font-weight: 300;
            line-height: 30px;
            margin-bottom: 20px;
        }

        .heading-text.heading-vintage p span {
            font-weight: 600;
        }

        .heading-text.heading-line h1:before, .heading-text.heading-line h2:before, .heading-text.heading-line h3:before, .heading-text.heading-line h4:before, .heading-text.heading-line h5:before, .heading-text.heading-line h6:before {
            content: '';
            position: absolute;
            width: 30px;
            height: 2px;
            left: 0;
            bottom: -8px;
            right: 0;
            background-color: #ddd;
        }

        .heading-text.heading-line.text-center h1:before, .heading-text.heading-line.text-center h2:before, .heading-text.heading-line.text-center h3:before, .heading-text.heading-line.text-center h4:before, .heading-text.heading-line.text-center h5:before, .heading-text.heading-line.text-center h6:before {
            margin: 0 auto;
        }

        .heading-text.heading-line.text-right h1:before, .heading-text.heading-line.text-right h2:before, .heading-text.heading-line.text-right h3:before, .heading-text.heading-line.text-right h4:before, .heading-text.heading-line.text-right h5:before, .heading-text.heading-line.text-right h6:before {
            right: 0;
            left: auto;
        }

        /*Creative fade heading*/
        .heading-creative {
            font-size: 62px;
            font-weight: 100;
            position: relative;
            text-align: left;
            width: 100%;
        }

        .heading-creative strong {
            color: #2250fc;
        }

        /*Fixes*/
        #header:not([data-transparent="true"]).dark .heading-creative {
            color: #eee;
        }

        .row {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }
        .card-row{
            margin-bottom: 20px;
        }

    </style>

</head>
<body>

<!--navigation menu-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">MyMovie</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
        </ul>
        <span class="navbar-text">
             <ul class="navbar-nav mr-auto">
                 <li class="nav-item">
                  <a class="nav-link" href="#">Login</a>
                  </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">Register</a>
                  </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">Contact Us</a>
                  </li>
             </ul>
        </span>
    </div>
</nav>
<!-- slider of movie section-->
<div id="carouselExampleCaptions" class="carousel slide"
     style="border-top: 2px solid orangered; border-bottom: 2px solid orangered;" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="image/slider/249997.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="image/slider/259361.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="image/slider/272081.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="image/slider/299680.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Four slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container-fluid">
<!--     top movie heading-->
    <div class="row">
        <div class="col-md-12 heading-text heading-section text-center m-b-40 visible">
            <h2>Top Movies</h2>
            <span class="lead">Create amam ipsum dolor sit amet, Beautiful nature, and rare feathers!.</span>
        </div>
    </div>

<!--    Top Movies Section-->
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xl-4 card-row">
            <div class="card text-center">
                <img src="https://loremflickr.com/640/360" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xl-4 card-row" >
            <div class="card text-center" >
                <img src="https://loremflickr.com/640/360" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xl-4 card-row">
            <div class="card text-center" >
                <img src="https://loremflickr.com/640/360" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
        </div>


        <div class="col-md-4 col-sm-12 col-xl-4 card-row">
            <div class="card text-center">
                <img src="https://loremflickr.com/640/360" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xl-4 card-row">
            <div class="card text-center" >
                <img src="https://loremflickr.com/640/360" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xl-4 card-row">
            <div class="card text-center" >
                <img src="https://loremflickr.com/640/360" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
        </div>
    </div>

<!--    upcoming movies section-->

    <div class="row">
        <div class="col-md-12 heading-text heading-section text-center m-b-40 visible">
            <h2>Upcoming Movies</h2>
            <span class="lead">Create amam ipsum dolor sit amet, Beautiful nature, and rare feathers!.</span>
        </div>
    </div>

</div>
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
