@extends('console.index')
@section('content')
    <div class="" style="">
        <table class="table table-hover">
            <tr>
                <th>API名称</th>
                <th>API描述</th>
                <th>当月最大限制</th>
                <th>剩余次数</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
            @if(isset($api)&&!empty($api)&&!$api->isEmpty())
                @foreach($api as $key=>$val)
                    <tr>
                        <td class="col-md-2">{{$val->privilege_name}}</td>
                        <td class="col-md-2">{{$val->desc}}</td>
                        <td class="col-md-2">{{$val->limit}}</td>
                        <td class="col-md-2">{{$val->remain}}</td>
                        <td class="col-md-2">@if($val->status)正常使用@else已使用完@endif</td>
                        <td class="col-md-2"><a href="{{URL::to('api/show',['id'=>$val->privilege_id])}}"
                                                target="_blank">查看文档</a></td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6">您还未申请过api，<a href="{{URL::to('api/index')}}">去申请-></a></td>
                </tr>
            @endif
        </table>
    </div>
@endsection