<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @include('common/resource')
    <link href="{{URL::asset('css/register.css')}}" rel="stylesheet"/>
</head>
<body>
@include('common/header')
<div class="content container-fluid">
    <form class="form-horizontal" role="form" method="post" action="{{URL::to('/password/reset')}}">
        <div class="form-group">
            <label for="member" class="col-sm-5 col-sm-offset-2 control-label"><h4><strong>重新填写密码</strong></h4></label>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">注册的邮箱</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="请输入邮箱">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">新密码</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" name="password" placeholder="请输入新密码">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">重复密码</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" name="password_confirmation" placeholder="请重复输入密码">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-4">
                {!! csrf_field() !!}
                <input type="hidden" name="token" value="{{$token}}">
                <button type="submit" class="btn btn-default btn-primary">重置密码</button>
            </div>
        </div>
    </form>
</div>
@include('common/footer')
</body>
</html>