@extends('backstage-template.layout')

@section('title','Account Manager')


@section('content')

        <button type="button" onclick="location.href = '{{ url('backstage/user/append') }}'" class="btn btn-default">新增</button>
        <table id="myTable" width="100%" class="table table-striped table-bordered">
            <thead>
            <tr>
                <td style="width: 50%;">管理者名稱</td>
                <td style="width: 50%;">操作</td>
            </tr>
            </thead>
            <tbody>
            @foreach( $result as $item )
                <tr>
                    <td>{{ $item->username }}</td>
                    <td>
                        <button type="button" class="btn btn-primary" onclick="location.href = '{{ url('backstage/user/modify') }}/{{ $item->id }}'">修改</button>
                        <button type="button" class="btn btn-danger" onclick="removeData({{ $item->id }})">刪除</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#myTable').DataTable();

            function removeData( id ) {
                if ( confirm("你確定你要刪除這一筆資料？") ){
                    $.ajax({
                        url : "{{ url('backstage/user') }}/"+id,
                        data : {
                            '_method' : 'delete'
                        },
                        method: 'post',
                        success : function () {
                            alert('success');
                            location.reload();
                        },
                        error: function () {
                            alert('failed');
                        }
                    })
                }
            }
        </script>

@endsection