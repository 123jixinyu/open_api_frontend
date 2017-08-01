<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @include('common/resource')
    <link href="{{URL::asset('css/register.css')}}" rel="stylesheet"/>
    <style>
        .email-alert {
            margin: 3px 0 0 0;
            padding: 5px;
            text-align: center;
        }
        .captcha-alert{
            padding: 5px;
            text-align: center;
        }

    </style>
</head>
<body>
@include('common/header')
<div class="content container-fluid">
    <form class="form-horizontal" role="form" method="post" action="{{URL::to('/password/email')}}">
        <div class="form-group">
            <label for="member" class="col-sm-3 control-label"><h4><strong>找回密码</strong></h4></label>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">注册的邮箱</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="请输入邮箱">
                @if(count($errors)>0&&!empty($errors->first('email')))
                    <p class="alert alert-danger email-alert" role="alert">{{$errors->first('email')}}</p>@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">验证码</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="captcha" value="" placeholder="请输入验证码">

            </div>
            <div class="col-sm-3 control-label" style="height:34px;line-height:34px;padding:0 0 0 5px"><img
                        src="{{captcha_src()}}"
                        style="height:100%;display:block;cursor:pointer;"
                        onclick="this.src='/captcha/default?'+Math.random()"/>
        </div>
        @if(count($errors)>0&&!empty($errors->first('captcha')))
            <p class="alert alert-danger col-sm-8 col-sm-offset-3 captcha-alert" role="alert">{{$errors->first('captcha')}}</p>@endif
        <div class="clearfix"></div>
            <div class="form-group" style="margin-top:10px;">
            <div class="col-sm-offset-3 col-sm-4">
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-default btn-primary">找回密码</button>
            </div>
            <label class="control-label col-sm-4">已知道密码？&nbsp;<a href="#">我要登录</a></label>
        </div>
    </form>
</div>
@include('common/footer')
</body>
</html>