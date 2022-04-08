@extends('layout')

@section('content')
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <a href="{{URL::to('/')}}" type="button" class="btn btn-warning mb-3">
            <span class="fa fa-pencil mr-5"></span>Trở về
        </a>
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Thêm Công Việc</h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="{{URL::to('/store')}}">
                    @csrf
                    <div class="form-group">
                        <label>Tên công việc :</label>
                        <input type="text" name="work" class="form-control" />
                    </div>
                    <label>Trạng Thái :</label>
                    <select class="form-control" name='status'>
                        <option value="1">Đang làm</option>
                        <option value="0">Đã xong</option>
                    </select>
                    <br/>
                    <div class="text-center">
                        <button type="submit" class="btn btn-warning">Thêm</button>&nbsp;
                        <button type="submit" class="btn btn-danger">Hủy Bỏ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection