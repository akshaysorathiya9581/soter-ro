@extends('main.layouts.master')

@section('body')

    <section id="formular">

        <div class="col-md-6 ">
            <div class="timeline timeline-colored">
                <ul class="timeline-circles">
                    <li>
                        <div class="col-md-12 ">
                            <div class="timeline-block">
                                <div class="icon-box fancy">
                                    <div class="icon"> <a href="#"><i class="fa fa-graduation-cap"></i></a> </div>
                                    <h4>
                                        @lang('web.careers_experience_title')
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12 ">
                            <div class="timeline-block">
                                <div class="icon-box fancy ">
                                    <div class="icon"> <a href="#"><i class="fa fa-gamepad"></i></a> </div>
                                    <h4>
                                        @lang('web.careers_passion_title')
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12">
                            <div class="timeline-block">
                                <div class="icon-box fancy">
                                    <div class="icon"> <a href="#"><i class="fa fa-group"></i></a> </div>
                                    <h4>@lang('web.careers_meet_title')</h4>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12 2">
                            <div class="timeline-block">
                                <div class="icon-box fancy">
                                    <div class="icon" data-animation="bounce infinite"> <a href="#"><i
                                                class="fa fa-send"></i></a> </div>
                                    <h4>
                                        @lang('web.careers_send_title')
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <li class="timeline-date"></li>
        </div>

        <div class="col-md-6">
            <form id="widget-contact-form" action="{{URL::asset('assets/Site/Include/contact-form-carrers.php')}}"
                role="form" method="post">
                <div class="row">
                    <div class="form-group p col-sm-8 col-sm-offset-2">
                        <label for="name">@lang('web.careers_form_label_name')</label>
                        <input type="text" aria-required="true" name="widget-contact-form-name"
                            class="form-control required name" placeholder="@lang('web.careers_form_placeholder_name')">
                    </div>
                    <div class="form-group p col-sm-8 col-sm-offset-2">
                        <label for="email">@lang('web.careers_form_label_email')</label>
                        <input type="email" aria-required="true" name="widget-contact-form-email"
                            class="form-control required email" placeholder="@lang('web.careers_form_placeholder_email')">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-8 col-sm-offset-2">
                        <label for="phone">@lang('web.careers_form_label_phone')</label>
                        <input type="text" name="widget-contact-form-phone" class="form-control required"
                            placeholder="@lang('web.careers_form_placeholder_phone')">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group p col-sm-8 col-sm-offset-2">
                        <label for="message">@lang('web.careers_form_label_message')</label>
                        <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control required"
                            placeholder="@lang('web.careers_form_placeholder_message')" id="mess"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group p col-sm-8 col-sm-offset-2">
                        <label for="message">@lang('web.careers_form_label_domain')</label>
                        <textarea type="text" name="widget-contact-form-domain" rows="1" class="form-control required"
                            placeholder="@lang('web.careers_form_placeholder_domain')" id="mess"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group p col-sm-8 col-sm-offset-2">
                        <label for="message">@lang('web.careers_form_label_cv')<small>*</small></label>
                        <input type="file" aria-required="true" name="widget-contact-form-attachment" value=""
                            class="form-control required" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group p col-sm-8 col-sm-offset-2">
                        <input type="text" class="hidden" id="widget-contact-form-antispam"
                            name="widget-contact-form-antispam" value="blow" />
                        <button class="btn btn-primary" type="submit" id="form-submit"><i
                                class="fa fa-paper-plane"></i>&nbsp;@lang('web.careers_button_send')</button>
                    </div>
                </div>
            </form>

            <script type="text/javascript">
                jQuery("#widget-contact-form").validate({
                    submitHandler: function (form) {
                        jQuery(form).ajaxSubmit({
                            success: function (text) {
                                if (text.response == 'success') {
                                    $.notify({
                                        message: "We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible."
                                    }, {
                                        type: 'success'
                                    });
                                    $(form)[0].reset();

                                } else {
                                    $.notify({
                                        message: text.message
                                    }, {
                                        type: 'danger'
                                    });
                                }
                            }
                        });
                    }
                });
            </script>

        </div>
    </section>
    <!-- END: CONTENT -->
@endsection