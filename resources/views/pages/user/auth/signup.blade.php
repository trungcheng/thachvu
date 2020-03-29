@extends('layouts.user.master')

@section('page')Đăng ký
@stop

@section('description')Đăng ký.
@stop

@section('keywords')Đăng ký
@stop

@section('canonical'){{ route('getSignUp') }}
@stop

@section('alternate'){{ route('getSignUp') }}
@stop

@section('propName')Đăng ký.
@stop

@section('propDesc')Đăng ký.
@stop

@section('ogTitle')Đăng ký.
@stop

@section('ogDesc')Đăng ký.
@stop

@section('ogUrl'){{ route('getSignUp') }}
@stop

@section('pageCss')

@stop

@section('content')
	<!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li class="active">Đăng ký</li>
        </ol>
      </div>
    </div>
    
    <!-- Blog -->
    <section class="login-sec padding-top-30 padding-bottom-100">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3"> 
            <!-- Login Your Account -->
            <h5 class="text-uppercase">Đăng ký</h5>
            <!-- FORM -->
            @if (count($errors) > 0)
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li style="list-style:none">{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <form action="" method="post">
              {{ csrf_field() }}
              <ul class="row">
                <li class="col-sm-12">
                  <label>Họ tên
                    <input autofocus type="text" class="form-control" name="fullname" placeholder="Họ tên">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>Email
                    <input type="email" class="form-control" name="email" placeholder="Địa chỉ email">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>Số điện thoại
                    <input type="text" class="form-control" name="mobile" placeholder="Số điện thoại">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>Mật khẩu
                    <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>Xác nhận mật khẩu
                    <input type="password" class="form-control" name="repassword" placeholder="Xác nhận mật khẩu">
                  </label>
                </li>
                <li class="col-sm-12 text-left">
                  <button style="width:100%;margin-top:30px;" type="submit" class="btn-round">Đăng ký</button>
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </section>
@stop

@section('pageJs')

@stop