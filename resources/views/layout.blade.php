<!DOCTYPE html>
<html lang="">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Todo</title>
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
        <link src="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
</head>

<style>
    .name-work{
        text-decoration: line-through;
    }

    .dataTables_wrapper .dataTables_length {
        float: none;
    }   
</style>

<body>
    <div class="container">
        <div class="text-center">
            <h1>{{$title}}</h1>
            <hr/>
        </div>
        <div class="row">
            @yield('content')
        </div>
    </div>
    @include('sweetalert::alert')
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
    
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    {{-- <script>
        window.onload = function () {
        document.querySelectorAll('.checkbox').checked = false;
        localStorage.removeItem('checkVal');
        console.log('ok');
        var checkboxes = document.querySelectorAll('.checkbox:checked')
            for (var i = 0; i < checkboxes.length; i++) {
                arrCheck.push(checkboxes[i].value)
            }
        document.querySelector(".loop").innerHTML = arrCheck.join(", ");
    }
    </script> --}}
    <script>
        $(document).ready( function () {
            var table = $('#myTable').DataTable({
                stateSave: true,
                //custom table
                language: {
                    lengthMenu: "Điều chỉnh số lượng bản ghi trên 1 trang _MENU_ ",
                    paginate: {
                        first: "Trang đầu",
                        previous: "Trang trước",
                        next: "Trang sau",
                        last: "Trang cuối"
                    },
                    info: "Bản ghi từ _START_ đến _END_ Tổng công _TOTAL_ bản ghi",
                    search: "Bạn muốn tìm gì: ",
                    searchPlaceholder: "Tìm kiếm..."
                },

                dom: 'lBfrtip',

                // btn export tool
                buttons: [
                    'print',
                    'copyHtml5',
                    'csv',
                    {
                        extend: 'pdfHtml5',
                        className: 'btn-danger'
                    },
                    {
                        extend: 'excelHtml5',
                        autoFilter: true,
                        sheetName: 'Exported data',
                    },
                ]
            });
        });
    </script>

</body>

</html>