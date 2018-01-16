@extends('panel.layouts.master')
@section('breadcrumb')
    <div class="nav-box-head">
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard bread-hover"></i>
                <a href="" class="none-text display-none animated fadeIn homeClass"> خانه</a></li>
            <li><i class="fa fa-bandcamp" aria-hidden="true"></i><a href="#">برچسب ها</a></li>
        </ol>
    </div>
@stop
@section('content')
<div class="col-md-12 col-xs-12">
    <div class="col-md-12 col-xs-12">
        <div class="card">
            <div class="card-header">
                <strong>برچسب ها</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 col-xs-12 form-group">
                        <label>عنوان برچسب</label>
                        <input name="name" id="name"
                               data-base=""
                               class="form-control keyword-title body-color required-form" placeholder="عنوان برچسب را وارد کنید"
                               value="">
                    </div>
                    <div class="col-md-3 col-xs-12 form-group">
                        <label>اولویت </label>
                        <input  name="order" id="order" type="number"
                                data-base="" class="form-control body-color" placeholder="اولویت">
                    </div>
                    <div class="col-md-4 col-xs-12 form-group">
                        <div class="margin-active-box ">
                            <label for="active" class="lable-active"> فعال</label>
                            <label class="switch margin-top-35">
                                <input class="slider box-switch-info round big-round" type="checkbox" name="is_active" id="is_active">
                                <span class="slider box-switch-info round big-round" id="activation"></span>
                            </label>
                            <label for="active" class="lable-noactive">غیر فعال</label>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-12 form-group margin-top-20">
                        <button class="btn bg-purple audit_submit" id="btnKeyword" type="submit">
                            <i class="fa fa-check"aria-hidden="true"></i>
                            ثبت
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection