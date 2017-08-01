<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    @include('common/resource')
    <link href="{{URL::asset('css/index.css')}}" rel="stylesheet"/>
</head>
<body>
@include('common/header')
<div class="container-fluid">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="background: #146192">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="text-align: center">
                <img src="{{URL::asset('image/car1.png')}}" alt="...">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="{{URL::asset('image/car2.png')}}" alt="...">
                <div class="carousel-caption">

                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
@include('common/footer')
</body>
</html>
