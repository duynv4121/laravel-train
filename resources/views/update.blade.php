@extends('layout')

@section('content')
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Cập nhật công việc</h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="{{URL::to('/update', $work['id'])}}">
                    @csrf
                    <div class="form-group">
                        <label>Tên công việc :</label>
                        <input type="text" value="{{$work['works']}}" name="work" class="form-control" />
                    </div>
                    <label>Trạng Thái :</label>
                    <select class="form-control" name='status'>
                        <option  @if ($work['status'] == 1) selected @endif value="1">Đang làm</option>
                        <option  @if ($work['status'] == 0) selected @endif value="0">Đã xong</option>
                    </select>
                    <br/>
                    <div class="text-center">
                        <button type="submit" class="btn btn-warning">Cập nhật</button>&nbsp;
                        <button type="reset" class="btn btn-danger">Hủy Bỏ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection