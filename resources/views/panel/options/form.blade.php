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
        <div class="col-md-6 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <strong>قسمت های خاص</strong>
                </div>
                <div class="card-body">
                    <div class="col-md-12 col-xs-12 network-social">
                        <div class="col-sm-6 col-md-6 col-xs-12 form-group">
                            <div class="input-group">
                                        <span class="input-group-addon pad-fb">
                                        <i class="fa fa-facebook box-icon-fa"></i>
                                        </span>
                                <input id="url_facebook" type="text" class="form-control ltr" placeholder="facebook"
                                       name="url_facebook" value="">
                            </div>
                        </div>
                        <div class="col-sm-6 form-group col-md-6 col-xs-12">
                            <div class="input-group">
                                        <span class="input-group-addon">
                                        <i class="fa fa-paper-plane"></i>
                                        </span>
                                <input id="url_telegram" type="text" class="form-control ltr" placeholder="telegram"
                                       name="url_telegram" value="">
                            </div>
                        </div>
                        <div class="col-sm-6 form-group col-md-6 col-xs-12">
                            <div class="input-group ">
                                <span class="input-group-addon pad-twitter">
                                    <i class="fa fa-twitter"></i>
                                </span>
                                <input id="url_twitter" type="text" class="form-control ltr" placeholder="twitter"
                                       name="url_twitter" value="">
                            </div>
                        </div>
                        <div class="col-sm-6 form-group col-md-6 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                     <i class="fa fa-instagram"></i>
                                </span>
                                <input id="url_instagram" type="text" class="form-control ltr" placeholder="instagram"
                                       name="url_instagram" value="">
                            </div>
                        </div>
                        <div class="col-sm-6 form-group col-md-6 col-xs-12">
                            <div class="input-group ">
                                <span class="input-group-addon">
                                    <i class="fa fa-linkedin-square linkedin-icon"></i>
                                </span>
                                <input id="url_linkedIn" type="text" class="form-control ltr" placeholder="linkedin"
                                       name="url_linkedIn" value="">
                            </div>
                        </div>
                        <div class="col-sm-6 form-group col-md-6 col-xs-12 ">
                            <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-slack"></i>
                                        </span>
                                <input id="url_aparat" type="text" class="form-control ltr" placeholder="aparat"
                                       name="url_aparat" value="">
                            </div>
                        </div>
                        <div class="col-sm-6 form-group col-md-6 col-xs-12">
                            <div class="input-group ">
                                <span class="input-group-addon pad-google">
                                    <i class="fa fa-google-plus"></i>
                                </span>
                                <input id="url_google" type="text" class="form-control ltr" placeholder="google plus"
                                       name="url_google" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="pull-left">
                        <button type="submit" class="btn btn-Gray-panel">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            ذخیره
                        </button>
                        <a href="" class="btn btn-default ">
                            <i class="fa fa-arrow-left " aria-hidden="true"></i>
                            بازگشت
                        </a>
                        <a href="#" data-widget="collapse" data-toggle="tooltip" data-original-title="" title="">
                            <div class="pull-left padding-top-9"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <strong>اطلاعات پایه سایت</strong>
                </div>
                <div class="card-body">
                    <div class="col-md-12 col-xs-12">
                        <div class="col-md-12 col-xs-12 form-group  ">
                            <div class="form-group">
                                <label for="title">اسم سایت</label>
                                <input id="site_title" type="text" class="form-control ltr" placeholder="Site name"
                                       name="site_title" value="">
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 form-group">
                            <div class="form-group">
                                <label for="title">کلمات کلیدی سایت</label>
                                <select class="select-form form-control body-color" name="keywords[]" multiple="multiple" >
                                    <option>test</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-xs-12 form-group">
                            <label for="message"> فو آیکون</label>
                            <div>
                                <button type="button"  data-input="favicon_id" data-preview="favicon-holder" class="btn lfm-image" >انتخاب تصویر</button>
                                    <img id="favicon-holder" class="img-responsive options-image" src="">
                                    <img id="favicon-holder" class="img-responsive options-image" src="">
                                <input type="hidden" id="favicon_id" class="form-control"  name="favicon_id">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-xs-12 form-group">
                            <label for="message"> آیکون</label>
                            <div>
                                <button type="button"  data-input="icon_id" data-preview="icon-holder" class="btn lfm-image" >انتخاب تصویر</button>
                                    <img id="icon-holder" class="img-responsive options-image" src="">
                                    <img id="icon-holder" class="img-responsive options-image" src="">
                                <input type="hidden" id="icon_id" class="form-control"  name="icon_id">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="card">
                <div class="card-header">
                    شبکه های اجتماعی
                </div>
                <div class="card-body">
                    <div class="col-md-4 col-xs-6 form-group">
                        <a href="" target="_blank">
                            <button class="color-telegram btn social-btn telg" type="button">
                                <i class="fa fa-telegram"></i>
                            </button>
                            تلگرام
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 form-group">
                        <a href="" target="_blank">
                            <button class="color-fb btn social-btn fb " type="button" >
                                <i class="fa fa-facebook box-faceboox-icon"></i>
                            </button>
                            فیس بوک
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 form-group">
                        <a href="" target="_blank">
                            <button class="color-googlep btn social-btn gp" type="button">
                                <i class="fa fa-google-plus font-size-14"></i>
                            </button>
                            گوگل پلاس
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 form-group">
                        <a href="" target="_blank">
                            <button class="color-insta btn social-btn insta" type="button">
                                <i class="fa fa-instagram"></i>
                            </button>
                            اینستاگرام
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 form-group">
                        <a href="" target="_blank">
                            <button class="color-aparat btn social-btn aparat " type="button">
                                <i class="fa fa-slack"></i>
                            </button>
                            آپارات
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 form-group">
                        <a href="" target="_blank">
                            <button class="color-linkdin btn social-btn linkd " type="button">
                                <i class="fa fa-linkedin"></i>
                            </button>
                            لینکدین
                        </a>
                    </div>
                    <div class="col-md-4 col-xs-6 form-group">
                        <a href="" target="_blank">
                            <button class="color-twiter btn social-btn ttwitter" type="button">
                                <i class="fa fa-twitter"></i>
                            </button>
                            توییتر
                        </a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <strong>   ارتباط با ما</strong>
                </div>
                <div class="card-body">
                    <div class="col-md-12 col-xs-12">
                        <div class="col-md-6 col-sm-12 col-xs-12 network-social form-group">
                            <div class="form-group">
                                <label for="title">شماره تماس</label>
                                <input id="phone" type="text" class="form-control ltr" name="phone"
                                       value=""
                                       placeholder="021-534535">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 network-social form-group">
                            <div class="form-group ">
                                <label for="title">شماره پشتیبانی</label>
                                <input id="phone_sup" type="text" class="form-control ltr" name="phone_sup"
                                       value=""
                                       placeholder="021">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 network-social">
                            <div class="form-group">
                                <label for="title">ایمیل</label>
                                <input id="mail" type="text" class="form-control ltr" name="mail"
                                       value="" placeholder="email@example.com">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group network-social">
                                <label for="title">ایمیل پشتیبانی</label>
                                <input id="mail_sup" type="text" class="form-control ltr" name="mail_sup"
                                       value=""
                                       placeholder="email@example.com">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group network-social">
                                <label for="title">کدپستی</label>
                                <input id="zipcode" type="text" class="form-control ltr"
                                       name="zipcode"
                                       value=""
                                       placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="message">ساعت کاری</label>
                                <div class="network-social">
                                    <textarea class="form-control box-txt-height body-color ereaclass form-control txt-size-ver txt-size-hor" rows="4" type="text" id="working_hours" name="hours"
                                    ></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group margin-top-15">
                                <label for="message ">آدرس</label>
                                <textarea name="address" rows="4" class="form-control box-txt-height body-color ereaclass form-control txt-size-ver txt-size-hor" type="text" id="address" aria-invalid="false"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection