@extends('api.templete')
@section('title')
    API
@endsection
@section('style')
    <link href="{{URL::asset('css/api_index.css')}}" rel="stylesheet"/>
    <style>
        table{border-right:1px solid #e0e0e0;border-bottom:1px solid #e0e0e0}
        table td,table th{
            border-left:1px solid #e0e0e0 !important;
            border-top:1px solid #e0e0e0 !important;}
    </style>
@endsection
@section('main')
    <div class="api_list clearfix">
        <img src="http://api-res.oss-cn-qingdao.aliyuncs.com/{{$api->head_img}}" class="head"/>
        <div class="desc">
            <h4>{{$api->name}}</h4>
            <p>{{$api->desc}}</p>
            <span>提供者:FreeAPI 接入数:1679</span>
        </div>
        <div class="act">
            <a class="btn btn-primary" href="{{URL::to('api/apply',['id'=>$api->id])}}">申请使用</a>
        </div>
    </div>
    <br/>
    <br/>
    <div class="container clearfix doc">
        {!! $api->doc !!}
    </div>
@endsection