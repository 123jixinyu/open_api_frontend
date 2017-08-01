<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @include('common/resource')
    <style>
        .sider, .main {
            float: left;
        }

        .sider {
            width: 15%;
            margin-left: 10%;
        }

        .main {
            margin-left: 5%;
            width: 65%;
        }

    </style>
    @yield('style')
</head>
<body>
@include('common/header')
<div class="content container">
    <div class="sider">
        <div class="list-group-item" style="border:0"><strong>功能分类</strong></div>
        <div class="list-group">
            @if(!empty($category))
                @foreach($category as $key=>$val)
                    @if(!empty($now)&&$val->id==$now->id)
                        <a href="{{URL::to('api/index',['id'=>$val->id])}}"
                           class="list-group-item active">{{$val->name}}</a>
                    @else
                        <a href="{{URL::to('api/index',['id'=>$val->id])}}" class="list-group-item">{{$val->name}}</a>
                    @endif
                @endforeach
            @else
                <a href="#" class="list-group-item active">还未新增功能</a>
            @endif

        </div>
    </div>

    <div class="main">
        @yield('main')
    </div>

</div>

@include('common/footer')
</body>
@yield('script')
</html>