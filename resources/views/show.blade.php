@extends('layout')

@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <a href="{{URL::to('/them-cong-viec')}}" type="button" class="btn btn-warning mb-3">
        <span class="fa fa-pencil mr-5"></span>Thêm công việc
    </a>

    <div class="row mt-15">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">STT</th>
                        <th class="text-center">Tên công việc</th>
                        <th class="text-center">Trạng Thái</th>
                        <th class="text-center">Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>
                            <input type="text" class="form-control" />
                        </td>
                        <td>
                            <select class="form-control">
                                <option value="-1">Tất Cả</option>
                                <option value="0">Ẩn</option>
                                <option value="1">Kích Hoạt</option>
                            </select>
                        </td>
                        <td></td>
                    </tr>
                    <?php $stt = 1 ?>
                    @foreach ($works as $work)
                        <tr>
                            <td>{{$stt++}}</td>
                            <td class=" @if($work->status == 0) name-work @endif">{{$work->works}}</td>
                            <td class="text-center">
                                @if ($work->status == 1)
                                    <span class="label label-danger">
                                        Đang làm
                                    </span>  
                                @else
                                    <span class="label label-success">
                                        Đã xong
                                    </span> 
                                @endif
                            </td>
                            <td class="text-center">
                                <a  type="button" href="{{URL::to('cap-nhat-cong-viec', $work->id)}}" class="btn btn-warning">
                                    <span class="fa fa-pencil mr-5"></span>Cập nhật
                                </a>
                                &nbsp;
                                <a href="{{URL::to('delete', $work->id)}}" type="button" class="btn btn-danger">
                                    <span class="fa fa-trash mr-5"></span>Xóa
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection