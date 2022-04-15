@extends('layout')

@section('content')
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <a href="{{URL::to('/')}}" type="button" class="btn btn-warning mb-3">
            <span class="fa fa-pencil mr-5"></span>Trở về
        </a>
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Gửi mail</h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="{{URL::to('/test-mail')}}">
                    @csrf
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="text" name="email" class="form-control" />
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-warning">Thêm</button>&nbsp;
                        <button type="submit" class="btn btn-danger">Hủy Bỏ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection