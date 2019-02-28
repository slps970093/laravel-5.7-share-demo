@extends('backstage-template.layout')

@section('title','Account Manager')


@section('content')

<form action="{{ url('backstage/user') }}" method="post">
    @csrf
    <h3>新增管理者</h3>
    <div class="form-group">
        <label for="username">管理者帳戶</label>
        <input name="username" type="text" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="password">管理者密碼</label>
        <input name="password" type="password" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="email">電子信箱</label>
        <input name="email" type="email" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="name">登入名稱</label>
        <input name="name" type="name" class="form-control" required>
    </div>

    <input type="submit" class="btn btn-primary" value="送出"  />
</form>
@endsection