@extends('api.templete')
@section('title')
    API
@endsection
@section('style')
    <link href="{{URL::asset('css/api_index.css')}}" rel="stylesheet"/>
@endsection
@section('main')
    <ul class="api_list">
        @if(!empty($api)&&$api instanceof \Illuminate\Support\Collection &&!$api->isEmpty())
            @foreach($api as $key=>$val)
                <li class="clearfix">
                    <div>
                        <img src="http://api-res.oss-cn-qingdao.aliyuncs.com/{{$val->head_img}}" class="head"/>
                        <div class="desc">
                            <h4><a href="{{URL::to('/api/show',['id'=>$val->id])}}">{{$val->name}}</a></h4>
                            <p>{{$val->desc}}</p>
                            <span>提供者:NowAPI 接入数:1679</span>
                        </div>
                        <div class="act">
                            <a class="btn btn-primary" href="{{URL::to('/api/show',['id'=>$val->id])}}">申请使用</a>
                        </div>
                    </div>
                </li>
            @endforeach
        @else
            暂无可用API
        @endif

    </ul>
@endsection