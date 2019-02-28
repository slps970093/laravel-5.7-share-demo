@extends('backstage-template.layout')

@section('title','Account Manager')


@section('content')

<form action="{{ url('backstage/user').'/'.$result->id }}" method="post">
    @csrf
    {{ method_field('patch') }}
    <h3>新增管理者</h3>
    <div class="form-group">
        <label for="username">管理者帳戶</label>
        <input name="username" type="text" class="form-control" value="{{ $result->username }}" required>
    </div>

    <div class="form-inline">
        <label><input class="form-control" name="enable" type="checkbox" onchange="enableChange()" value="1">修改密碼</label>
    </div>
    <div class="form-group">
        <label for="password">管理者密碼</label>
        <input name="password" type="password" class="form-control" readonly>
    </div>

    <div class="form-group">
        <label for="email">電子信箱</label>
        <input name="email" type="email" class="form-control" value="{{ $result->email }}" required>
    </div>

    <div class="form-group">
        <label for="name">登入名稱</label>
        <input name="name" type="name" class="form-control" value="{{ $result->name }}" required>
    </div>

    <input type="submit" class="btn btn-primary" value="送出"  />
</form>

    <script>
        function enableChange () {
            var val = $('input[name="enable"]:checked').val();
            if ( val === "1") {
                $('input[name="password"]').removeAttr('readonly','readonly');
                $('input[name="password"]').attr('required','required');
                $('input[name="password"]').val("");
            } else {
                $('input[name="password"]').attr('readonly','readonly');
                $('input[name="password"]').removeAttr('required','required');
                $('input[name="password"]').val("");
            }
        }
    </script>
@endsection