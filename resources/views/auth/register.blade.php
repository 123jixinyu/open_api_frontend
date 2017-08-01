<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @include('common/resource')
    <link href="{{URL::asset('css/register.css')}}" rel="stylesheet"/>
    <style>
        .alert {
            margin: 3px 0 0 0;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
@include('common/header')
<div class="content container-fluid">
    <form class="form-horizontal" role="form" method="post" action="{{URL::to('/auth/register')}}">
        <div class="form-group">
            <label for="member" class="col-sm-8 control-label"><h3>会员注册</h3></label>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">邮箱</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" placeholder="请输入邮箱">
                @if(count($errors)>0&&!empty($errors->first('email')))
                    <p class="alert alert-danger" role="alert">{{$errors->first('email')}}</p>@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" placeholder="请输入用户名">
                @if(count($errors)>0&&!empty($errors->first('name')))
                    <p class="alert alert-danger" role="alert">{{$errors->first('name')}}</p>@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control" placeholder="请输入密码">
                @if(count($errors)>0&&!empty($errors->first('password')))
                    <p class="alert alert-danger" role="alert">{{$errors->first('password')}}</p>@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">重复密码</label>
            <div class="col-sm-10">
                <input type="password" name="password_confirmation" class="form-control" placeholder="请重复输入密码">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">验证码</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="captcha" placeholder="请输入验证码">
                @if(count($errors)>0&&!empty($errors->first('captcha')))
                    <p class="alert alert-danger" role="alert">{{$errors->first('captcha')}}</p>@endif
            </div>
            <div class="col-sm-3 control-label" style="height:34px;line-height:34px;padding:0 0 0 5px"><img
                        src="{{captcha_src()}}"
                        style="height:100%;display:block;cursor:pointer;"
                        onclick="this.src='/captcha/default?'+Math.random()"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <button type="submit" class="btn btn-default btn-primary">确认注册</button>
            </div>
            <label class="control-label col-sm-4">已经有帐号？<a href="{{URL::to('/auth/login')}}">我要登录</a></label>
        </div>
    </form>
</div>
@include('common/footer')
</body>
</html>