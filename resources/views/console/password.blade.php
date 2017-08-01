@extends('console.index')
@section('content')
    <div class="container" style="width:400px;">
        <form role="form" method="post" action="{{URL::to('console/password')}}">

            <div class="form-group">
                <label>原密码</label>
                <input type="password" class="form-control" placeholder="请输入原有密码" name="password" value="" >
                @if(count($errors)>0&&!empty($errors->first('password')))
                    <div class="alert alert-danger" role="alert">{{$errors->first('password')}}</div>@endif
                @if(count($errors)>0&&!empty($errors->first('old_password')))
                    <div class="alert alert-danger" role="alert">{{$errors->first('old_password')}}</div>@endif
            </div>
            <div class="form-group">
                <label>新密码</label>
                <input type="password" class="form-control" placeholder="请输入新密码" name="new_password" value="" >
                @if(count($errors)>0&&!empty($errors->first('new_password')))
                    <div class="alert alert-danger" role="alert">{{$errors->first('new_password')}}</div>@endif
            </div>
            <div class="form-group">
                <label>重复输入密码</label>
                <input type="password" class="form-control" placeholder="请重复输入新密码" name="new_password_confirmation" value="" >
            </div>
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-default">确认修改</button>
        </form>
    </div>

@endsection