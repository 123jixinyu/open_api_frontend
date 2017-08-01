@extends('console.index')
@section('content')
    <div class="container" style="width:400px;">
        <form role="form" method="post" action="{{URL::to('console/user')}}">
            <div class="form-group">
                <label>用户名</label>
                <input type="text" class="form-control" placeholder="请输入用户名" name="name" value="{{$user->name}}">
                @if(count($errors)>0&&!empty($errors->first('name')))
                    <div class="alert alert-danger" role="alert">{{$errors->first('name')}}</div>@endif
            </div>
            <div class="form-group">
                <label>邮箱</label>
                <input type="email" class="form-control" placeholder="请输入邮箱" name="email" value="{{$user->email}}" disabled>
            </div>
            <div class="form-group">
                <label>注册时间</label>
                <input type="text" class="form-control" placeholder="" name="created_at" value="{{$user->created_at}}" disabled>
            </div>
            <div class="form-group">
                <label>最后更新时间</label>
                <input type="text" class="form-control" placeholder="" name="updated_at" value="{{$user->updated_at}}" disabled>
            </div>
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-default">变更</button>
        </form>
    </div>

@endsection