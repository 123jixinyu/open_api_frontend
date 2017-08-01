<div class="header container clearfix">
    <div class="logo">
        <a href="{{URL::to('/')}}"><img src="{{URL::asset('image/logo.png')}}"/></a>
    </div>
    <div class="main_title">
        <ul class="clearfix">
            <li><a href="{{URL::to('/api/index')}}">接口中心</a></li>
            <li><a href="{{URL::to('console/api')}}">控制中心</a></li>
        </ul>
    </div>
    <div class="action">
        <ul class="clearfix">
            @if(Auth::check())
                <li>欢迎您！<a  href="#" style="color:blue;text-decoration: underline">{{Auth::user()->name}}</a></li>
                <li><a href="{{URL::to('/auth/logout')}}">注销</a></li>
            @else
                <li><a href="{{URL::to('/auth/login')}}">登录</a></li>
                <li><a href="{{URL::to('/auth/register')}}">注册</a></li>
            @endif
        </ul>
    </div>
</div>