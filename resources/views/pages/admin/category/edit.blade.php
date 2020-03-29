@extends('layouts.admin.master')

@section('page')Cập nhật danh mục
@stop

@section('pageCss')

@stop

@section('content')
<div ng-controller="CategoryController">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Cập nhật danh mục
            <a href="{{ route('categories') }}" class="pull-right btn btn-success btn-sm">Quay lại</a>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-body">
                        <form id="formProcess" onsubmit="return false;" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <input type="hidden" id="id" name="id" value="{{ $category->id }}">
                                <div class="form-group">
                                    <label>Tên danh mục</label>
                                    <input value="{{ $category->name }}" name="name" type="text" class="form-control title" placeholder="Tên danh mục...">
                                </div>
                                <div class="form-group">
                                    <label>SEO Content</label>
                                    <textarea class="form-control" id="seo_content">{!! $category->seo_content !!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>SEO Title</label>
                                    <input value="{{ $category->seo_title }}" name="seo_title" type="text" class="form-control slug" placeholder="SEO Title...">
                                </div>
                                <div class="form-group">
                                    <label>SEO Description</label>
                                    <input value="{{ $category->seo_desc }}" name="seo_desc" type="text" class="form-control slug" placeholder="SEO Description...">
                                </div>
                                <div class="form-group">
                                    <label>SEO Keyword</label>
                                    <input value="{{ $category->seo_keyword }}" name="seo_keyword" type="text" class="form-control slug" placeholder="SEO Keyword (cách nhau bởi dấu phẩy)...">
                                </div>
                                <!-- <div class="form-group">
                                    <label>Ảnh</label>
                                    <input value="{{ $category->icon }}" name="icon" type="text" size="48" class="form-control" id="xFilePath" />
                                    <button class="btn btn-primary btn-upload" onclick="openPopup()">Tải ảnh lên</button>
                                </div> -->
                            </div>
                            <div class="modal-footer">
                                <button ng-click="process('update')" type="button" class="btn btn-primary">Cập nhật</button>
                                <a href="{{ route('categories') }}" class="btn btn-default">Quay lại</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>

        </div>
    </section>

</div>

<script>
    function openPopup() {
        CKFinder.popup( {
            chooseFiles: true,
            onInit: function( finder ) {
                finder.on( 'files:choose', function( evt ) {
                    var file = evt.data.files.first();
                    document.getElementById( 'xFilePath' ).value = file.getUrl();
                } );
                finder.on( 'file:choose:resizedImage', function( evt ) {
                    document.getElementById( 'xFilePath' ).value = evt.data.resizedUrl;
                } );
            }
        } );
    }
    
    function openPopupMulti(id) {
        CKFinder.popup( {
            chooseFiles: true,
            onInit: function( finder ) {
                finder.on( 'files:choose', function( evt ) {
                    var file = evt.data.files.first();
                    document.getElementById( 'xFilePath'+id ).value = file.getUrl();
                });
                finder.on( 'file:choose:resizedImage', function( evt ) {
                    document.getElementById( 'xFilePath'+id ).value = evt.data.resizedUrl;
                });
            }
        });
    }
</script>
<script type="text/javascript">
    CKEDITOR.replace('seo_content', {height: 300}); 
</script>
@stop

@section('pageJs')
    {!! Html::script('backend/js/angular/controllers/category.controller.js') !!}
@stop
