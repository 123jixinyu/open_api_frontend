<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    @include('common/resource')
    <style>
        .login-ad, .login {
            float: left;
        }

        .login-ad {
            width: 500px;
            margin-left: 140px;
        }

        .login-ad img {
            display: block;
            width: 100%;
            height: 100%;
        }

        .login {
            padding: 50px 100px;;
            width: 500px;
        }

        .login form .form-group {
            margin-top: 15px;
        }

        .alert {
            margin: 3px 0 0 0;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
@include('common/header')
<div class="container">
    <div class="login-ad">
        <img src="{{URL::asset('image/0373c4a11e245eef16de05cffd102cc2_banner_paas.png')}}"/>
    </div>
    <div class="login">
        <form class="form-inline" role="form" method="post" action="{{URL::to('/auth/login')}}">
            <div class="form-group col-sm-12">
                <label class="control-label">账户登录</label>
            </div>
            <div class="form-group col-sm-12">
                <div class="input-group col-sm-11">
                    <div class="input-group-addon">邮箱</div>
                    <input class="form-control" type="email" name="email" placeholder="请输入您的邮箱">
                </div>
                @if(count($errors)>0&&!empty($errors->first('email')))
                    <div class="alert alert-danger col-sm-11" role="alert">{{$errors->first('email')}}</div>@endif
            </div>
            <div class="form-group col-sm-12">
                <div class="input-group col-sm-11">
                    <div class="input-group-addon">密码</div>
                    <input class="form-control" type="password" name="password" placeholder="请输入您的密码">
                </div>
                @if(count($errors)>0&&!empty($errors->first('password')))
                    <div class="alert alert-danger col-sm-11" role="alert">{{$errors->first('password')}}</div>@endif
            </div>
            <div class="form-group col-sm-12">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <button type="submit" class="btn btn-default btn-primary col-sm-11">确认登录</button>
            </div>

            <div class="form-group col-sm-12">
                <p>
                    <a href="{{URL::to('password/email')}}">忘记密码?</a><br/>
                    还没有帐号，我要<a href="{{URL::to('/auth/register')}}">注册</a>
                </p>
            </div>

        </form>
    </div>
</div>
@include('common/footer')
</body>
</html>