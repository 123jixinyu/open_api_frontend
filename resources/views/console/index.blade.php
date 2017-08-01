<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    @include('common/resource')
    <link href="{{URL::asset('js/bootstrap/css/bootstrap.yeti.min.css')}}" rel="stylesheet"/>
    <style>
        .nav, .panel-body, .wrapper {
            padding: 0;
        }

        ul li, .panel-title {
            text-align: center;
        }

        .panel-group li {
            border-bottom: 1px solid #DDDDDD;
        }

        /*.panel-group {*/
        /*width: 150px;*/
        /*}*/

        .sider, .main-wrapper {
            float: left;
        }

        .sider {
            width: 15%;
        }

        .main-wrapper {
            margin-left: 2%;
            width: 80%;
        }

        .alert {
            margin: 3px 0 0 0;
            padding: 5px;
            text-align: center;
        }
        .main{
            padding:0;
        }
    </style>
    @yield('style')
</head>
<body class="container-fluid main">
<nav class="container-fluid navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::to('console/api')}}">API接口中心</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class=""><a href="{{URL::to('/')}}">回到首页</a></li>
                <li><a href="{{URL::to('api/index')}}">接口文档</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li><a href="#">{{Auth::user()->name}}</a></li>
                    <li><a href="{{URL::to('auth/logout')}}">注销</a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="wrapper container-fluid clearfix">
    <div class="sider">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                           aria-controls="collapseOne">
                            我的账户
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked" role="tablist">
                            <li role="presentation" class=""><a href="{{URL::to('console/user')}}">账户设置</a></li>
                            <li role="presentation"><a href="{{URL::to('console/password')}}">修改密码</a></li>
                            <li role="presentation"><a href="{{URL::to('console/apikey')}}">ApiKey</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                           aria-expanded="false" aria-controls="collapseTwo">
                            接口管理
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked" role="tablist">
                            <li role="presentation" class=""><a href="{{URL::to('console/api')}}">我的接口</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wrapper">
        @yield('content')
    </div>
</div>

</body>
@yield('script')
</html>