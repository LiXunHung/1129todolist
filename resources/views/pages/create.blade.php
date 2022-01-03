@extends('layout.master')
@section('content')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <div class="container">
        <form class="form-group m-5" action="{{route('store_create_data')}}" method="post">
            @csrf
            <div class="row form-group">
                <label class="col-sm-3 text-right">標題</label>
                <input class="form-control col-sm-6" name="title">
            </div>
            <div class="row form-group">
                <label class="col-sm-3 text-right">內容</label>
                <input class="form-control col-sm-6" name="content">
            </div>
            <div class="row form-group">
                <label class="col-sm-3 text-right">備註</label>
                <input class="form-control col-sm-6" name="remark">
            </div>
            <div class="row form-group justify-content-center">
                <script>
                    function time_delay() {
                        swal("Good job!", "You clicked the button!", "success")
                    }
                </script>
                <button class="btn btn-outline-info col-sm-3" onclick="time_delay()" >送出新增</button>
            </div>
        </form>
    </div>


@endsection
