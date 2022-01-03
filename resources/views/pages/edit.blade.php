@extends('layout.master')
@section('content')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <div class="container">
        <form class="form-group m-5" action="{{route('store_edit_data')}}" method="post">
            @csrf
            <div class="row form-group">
                <label class="col-sm-3 text-right">標題</label>
                <input class="form-control col-sm-6" name="title" value="{{$data->title}}">
            </div>
            <div class="row form-group">
                <label class="col-sm-3 text-right">內容</label>
                <input class="form-control col-sm-6" name="content" value="{{$data->content}}">
            </div>
            <div class="row form-group">
                <label class="col-sm-3 text-right">備註</label>
                <input class="form-control col-sm-6" name="remark" value="{{$data->remark}}">
            </div>
            <div class="row form-group justify-content-center">
                <button class="btn btn-outline-info col-sm-3" onclick="swal('Good job!', '修改成功!', 'success'); " type="submit">送出儲存</button>
            </div>
            <input type="hidden" name="id" value="{{$data->id}}"/>
        </form>
    </div>


@endsection
