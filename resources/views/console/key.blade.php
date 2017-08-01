@extends('console.index')
@section('style')
    <script src="{{URL::asset('js/ZeroClipboard.min.js')}}"></script>
@endsection
@section('content')
    <div class="container" style="width: 600px;margin-top: 50px;">
        <form role="form" class="form-horizontal" method="post" action="{{URL::to('console/apikey')}}">
            {!! csrf_field() !!}
            <div class="form-group">
                <label class="col-md-2 control-label">apikey</label>
                <div class="col-md-7">
                    <input type="text" class="form-control col-md-10" placeholder=""
                           value="{{100000+Auth::user()->id}}" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Sign</label>
                <div class="col-md-7">
                    <input id="content" type="text" class="form-control col-md-10" placeholder="" name="apikey"
                           value="{{Auth::user()->apikey}}" disabled>
                </div>
                <label class="btn btn-primary" id="copy" data-clipboard-target="content" data-toggle="tooltip"
                       data-placement="top" title="">复制</label>
                <button type="submit" class="btn btn-primary" style="margin-left: 10px">更新</button>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        var clip = new ZeroClipboard($("#copy"));
        $("#copy").click(function () {
            $(this).tooltip({
                title:"已复制"
            });
            $(this).tooltip('show');
        });
    </script>
@endsection
