@extends('layouts.user.master')

@section('page')Giới thiệu về Thạch Vũ - Thach Vu
@stop

@section('description'){{ $article->intro }}
@stop

@section('keywords')Giới thiệu về Thạch Vũ
@stop

@section('canonical'){{ route('article-detail', ['slug' => $article->slug]) }}
@stop

@section('alternate'){{ route('article-detail', ['slug' => $article->slug]) }}
@stop

@section('propName')Giới thiệu về Thạch Vũ - Thach Vu
@stop

@section('propDesc'){{ $article->intro }}
@stop

@section('ogTitle'){{ $article->title }}
@stop

@section('ogDesc'){{ $article->intro }}
@stop

@section('ogUrl'){{ route('article-detail', ['slug' => $article->slug]) }}
@stop

@section('pageCss')
	<style type="text/css">
		h1 {
			font-size: 30px;
			margin-bottom: 20px;
		}
	</style>	
@stop

@section('content')
<!-- Linking -->
<div class="linking">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="{{ route('home') }}">Trang chủ</a></li>
			<li class="active">Giới thiệu</li>
		</ol>
	</div>
</div>
<div class="container margin-bottom-50">
	<h1 class="text-center">{{ $article->title }}</h1>
	{!! $article->intro !!}
	{!! $article->fulltext !!}
</div>
@stop

@section('pageJs')

@stop