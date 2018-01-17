@extends('panel.layouts.master')
@section('breadcrumb')
    <div class="nav-box-head">
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard bread-hover"></i>
                <a href="" class="none-text display-none animated fadeIn homeClass"> خانه</a></li>
            <li><i class="fa fa-bandcamp" aria-hidden="true"></i><a href="#">دسته بندی ها</a></li>
        </ol>
    </div>
@stop
@section('content')
    <div class="col-md-12">
        <div class="col-md-6 col-xs-12 form-group">
            <div class="pull-left">
                <button type="submit" id="audit_submit" class="btn bg-purple ">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i>
    ذخیره            </button>
                <a href="#" class="btn btn-default ">
                    <i class="fa fa-arrow-left " aria-hidden="true"></i>
                    بازگشت
                </a>
                <a href="#" class="btn bg-purple">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            <ul class="nav nav-tabs tab-box" role="tablist">
                <li class="nav-item active m-r-2">
                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">افزودن دسته بندی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#seo" role="tab" aria-controls="seo">سئو</a>
                </li>
            </ul>
            <div class="tab-content bg-white">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12 margin-top-20">
                            <div class="form-group col-md-12">
                                <label for="name">نام دسته</label>
                                <input class="form-control  body-color required-form" type="text" name="name" placeholder="نام دسته" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group col-md-6">
                                <label for="parent">دسته والد</label>
                                <select name="parent" id="parent" class="form-control body-color">
                                    <option value="0" >هیچکدام</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label for="title">نوع دسته بندی </label>
                                <select name="type" id="type" class="form-control body-color">
                                    <option value="product" selected>محصولات </option>
                                    <option value="faq"> سوالات متداول</option>
                                    <option value="news"> اخبار </option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label for="order">اولویت</label>
                                <input id="order" class="form-control" type="number" name="order" placeholder="اولویت" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group col-md-12 col-xs-12">
                                <label for="parent">توضیحات</label>
                                <div class="input-group width-100">
                            <textarea class="body-color form-control textarea-box"
                                      name="description" id="" cols="30" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6 col-xs-12 form-group">
                                <label for="active" class="lable-active"> فعال</label>
                                <label class="switch margin-top-25">
                                    <input class="slider box-switch-info round big-round" type="checkbox" name="is_active" id="is_active">
                                    <span class="slider box-switch-info round big-round" id="activation"></span>
                                </label>
                                <label for="active" class="lable-noactive">غیر فعال</label>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <div class="">
                                    <label for="icon"> آيکون ها </label>
                                    <br>
                                    <button data-selected="graduation-cap"
                                            type="button"
                                            class="icp icon-Picker btn bg-purple dropdown-toggle iconpicker-component"
                                            data-toggle="dropdown"
                                            name="icon"
                                            role="iconpicker"
                                            data-iconset="fontawesome"
                                            data-icon=""
                                            data-search="true"
                                            data-search-text="جستجوی آیکون"
                                            data-arrow-prev-icon-class="glyphicon glyphicon-chevron-left"
                                            data-arrow-next-icon-class="glyphicon glyphicon-chevron-right"
                                            data-rows="4"
                                            data-cols="8"
                                            data-align="center">
                                        <i class="fa fa-plus"></i>
                                        <span class="caret"></span>
                                    </button>
                                    <div class="dropdown-menu"></div>
                                    <div class="input-group ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group col-md-12">
                                <label for="image"> عکس</label>
                                <div class="input-group ">
                                    <button type="button"  data-input="thumbnail" data-preview="holder" class="lfm-image btn" >انتخاب تصویر</button>
                                    <img id="holder" class="img-responsive img-select" src="">

                                    <input type="hidden" id="thumbnail" class="form-control"  name="filepath">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="seo" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group col-md-12 col-xs-12 margin-top-20">
                                <label for="parent">SEO Title</label>
                                <input class="form-control body-color" type="text" name="seo_title" id="seo_title" value="" placeholder="SEO Title">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group col-md-12 col-xs-12">
                                <label for="parent">برچسب ها</label>
                                <div class="width-100">
                                    <select class="select-form form-control body-color" name="states[]" multiple="multiple">
                                        <option value="AL">Alabama</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group col-md-12 col-xs-12">
                                <label for="parent">کلمات کلیدی</label>
                                <div class="width-100 ">
                                    <select class="select-form form-control body-color" name="states[]" multiple="multiple">
                                        <option value="AL">Alabama</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group col-md-12 col-xs-12">
                                <label for="parent">SEO Meta Description</label>
                                <div class="width-100">
                                    <textarea class="body-color form-control textarea-box" cols="30" rows="4" type="text" name="meta_desc" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12 form-group">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> دسته بندی
                    <input type="text" class="search-box-body body-color" id="filter" placeholder="جستجو ...">
                </div>
                <div class="card-body">
                    <table  data-filter="#filter" class="table table-hover table-stripped footable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>نام</th>
                                <th>وضعیت</th>
                                <th>آیکون</th>
                                <th>تغییرات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="td-spacing">1</td>
                                <td class="td-spacing">name</td>
                                <td class="td-spacing">active</td>
                                <td class="td-spacing">icon</td>
                                <td class="td-spacing">
                                    <a href="" class="btn btn-edit btn-edit-remove"><i class="fa fa-pencil"></i></a>
                                    <a href="" class="delete-item-btn btn btn-remove btn-edit-remove"><i class="glyphicon glyphicon-trash top-3"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection