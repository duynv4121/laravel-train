@extends('layout')

@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    {{-- <a href="{{URL::to('/them-cong-viec')}}" type="button" class="btn btn-warning mb-3">
        <span class="fa fa-pencil mr-5"></span>Thêm công việc
    </a> --}}

    <div class="row mt-15">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form action="{{url('destroyAll')}}" method="post">
                @csrf
            <table id="myTable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th><input type="checkbox" onchange="checkAll(this)" class="checkboxAll"></th>
                        <th class="text-center">STT</th>
                        <th class="text-center">Tên công việc</th>
                        <th class="text-center">Trạng Thái</th>
                        <th class="text-center">Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                        <button type="submit" class="btn btn-danger mb-2 float-left select destroyAll" style="display:none;" style=" font-weight:400;"> Xóa tất cả </button>
                        @foreach ($works as $work)
                            <tr>
                                <td><input type="checkbox" name="checkbox[]" onchange="getValue(this)" class="checkbox" value="{{$work->id}}"></td>
                                <td>{{$work->id}}</td>
                                <td class=" @if($work->status == 0) name-work @endif"><a href="https://www.google.com/">{{$work->works}}</a></td>
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
                                    <a type="button" href="{{URL::to('cap-nhat-cong-viec', $work->id)}}" class="btn btn-warning">
                                        <span class="fa fa-pencil"></span>Cập nhật
                                    </a>
                                    <a href="{{URL::to('delete', $work->id)}}" type="button" class="btn btn-danger">
                                        <span class="fa fa-trash"></span>Xóa
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </form>
                </tbody>
            </table>
            <p>Bạn đang chọn các công việc có id là: <span class="loop"></span></p>
        </div>
    </div>
</div>
<script type="text/javascript">
    var checkboxAll = document.querySelector('.checkboxAll')
    var checkBoxs = document.querySelectorAll('.checkbox')
    var selected = document.querySelector('.select')
    var unselected = document.querySelector('.unselect')
    var destroyAll = document.querySelector('.destroyAll')


    
    checkboxAll.onclick = () => {
        checkBoxs.forEach(checkBox => {
            if (checkboxAll.checked == true) {
                checkBox.checked = true
                // selected.style.display = 'none'
                destroyAll.style.display = 'block'
            } else {
                checkBox.checked = false
                // selected.style.display = 'block'
                destroyAll.style.display = 'none'
            }
        })
    }
</script>

<script type="text/javascript">
    var arrCheck = [];
    var valChecked = null;
    let checkboxAllId = document.querySelector('.checkboxAll')
    
    window.onload = function () {
        localStorage.removeItem('checkVal');
        var checkboxes = document.querySelectorAll('.checkbox:checked')
            for (var i = 0; i < checkboxes.length; i++) {
                arrCheck.push(checkboxes[i].value)
            }
        document.querySelector(".loop").innerHTML = arrCheck.join(", ");
    }
    var getLocalStorage = JSON.parse(localStorage.getItem("checkVal"));
    if(getLocalStorage){
        document.querySelector(".loop").innerHTML = getLocalStorage.join(", ");
    }
    function getValue(value){
        if(value.checked){
            if(arrCheck.includes(value.value)){
                return false
            }else{
                var count = arrCheck.push(value.value);
                document.querySelector(".loop").innerHTML = arrCheck.join(", ");
                localStorage.setItem("checkVal", JSON.stringify(arrCheck));
            }
        }else{
            if(arrCheck.includes(value.value)){
                for(i = 0; i <= arrCheck.length-1; i++){
                    if(arrCheck[i] == value.value){
                        arrCheck.splice(i, 1);
                    }
                }
            }
        }
        document.querySelector(".loop").innerHTML = arrCheck.join(", ");
    }
    
    function checkAll(value){
        arrCheck = []
        if(value.checked){
            var checkboxes = document.querySelectorAll('.checkbox')
            for (var i = 0; i < checkboxes.length; i++) {
                arrCheck.push(checkboxes[i].value)
            }
            localStorage.setItem("checkVal", JSON.stringify(arrCheck));
            document.querySelector(".loop").innerHTML = arrCheck.join(", ");
        }else{
            arrCheck = [];
        }
        document.querySelector(".loop").innerHTML = arrCheck.join(", ");
    }
</script>
@endsection