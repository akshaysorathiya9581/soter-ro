@extends('main.layouts.master')

@section('body')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-uppercase">@lang('web.contact_title')</h3><br> @lang('web.contact_description')<br />
                    @lang('web.contact_description2')<br />
                    @lang('web.contact_description3')</br></br>
                    <strong>@lang('web.contact_gdpr_title')</br>
                        <em>@lang('web.contact_gdpr_subtitle')</em> </br>
                        @lang('web.contact_gdpr_email')</strong>
                    <div class="row m-t-40">
                        <div class="col-md-6">
                            <address>
                                <strong>@lang('web.contact_office')</strong><br>
                                @lang('web.contact_address')
                                <br>@lang('web.contact_sector')
                                <br>@lang('web.contact_city')
                                <br>@lang('web.contact_tel') @lang('web.contact_tel_value')
                                <br>@lang('web.contact_mobile') @lang('web.contact_mobile_value')
                                <br>@lang('web.contact_email') @lang('web.contact_email_value')
                            </address>
                        </div>
                    </div>
                    <div class="social-icons m-t-10 social-icons-colored">
                        <ul>
                            <li class="social-facebook"><a href="https://www.facebook.com/SOTER.Partners" target="_blank"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="https://twitter.com/SoterRomania" target="_blank"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="social-linkedin"><a href="https://www.linkedin.com/company/soter-&-partners"
                                    target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <form id="widget-contact-form" action="{{URL::asset('assets/Site/Include/contact-form.php')}}"
                        role="form" method="post">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="name">@lang('web.contact_form_name')</label>
                                <input type="text" aria-required="true" name="widget-contact-form-name"
                                    class="form-control required name" placeholder="@lang('web.contact_form_name_placeholder')">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="email">@lang('web.contact_form_email')</label>
                                <input type="email" aria-required="true" name="widget-contact-form-email"
                                    class="form-control required email" placeholder="@lang('web.contact_form_email_placeholder')">
                            </div>
                        </div>
                        <div>
                            <br>
                        </div>

                        <!--
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="subject">Company</label>
                                    <input type="text" name="widget-contact-form-subject" class="form-control required" placeholder="Enter company name ...">
                                </div>
                            </div>
        -->
                        <div>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="message">@lang('web.contact_form_message')</label>
                            <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control required"
                                placeholder="@lang('web.contact_form_message_placeholder')"></textarea>
                        </div>
                        <input type="text" class="hidden" id="widget-contact-form-antispam"
                            name="widget-contact-form-antispam" value="blow" />
                        <div>
                            <p>@lang('web.contact_career_text')<br>
                                <strong> <a href="{{ route('careers') }}"> @lang('web.contact_career_link') </a></strong></p>
                        </div>

                        <button class="btn btn-primary" type="submit" id="form-submit"><i
                                class="fa fa-paper-plane"></i>&nbsp;@lang('web.contact_form_submit')</button>
                    </form>


                    <script type="text/javascript">
                        jQuery("#widget-contact-form").validate({
                            submitHandler: function (form) {
                                jQuery(form).ajaxSubmit({
                                    success: function (text) {
                                        if (text.response == 'success') {
                                            $.notify({
                                                message: "@lang('web.contact_success_message')"
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

            </div>
        </div>
    </section>

    <!-- END: CONTENT -->
    <!-- MAP -->
    <!--     <section class="no-padding"> -->
    <section class="no-padding-top">
        <div class="col-md-10 col-md-offset-1">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423.42345733152547!2d26.096714707484885!3d44.44460431188875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb0bf685aa2bf1432!2sSoter+%26+Partners!5e0!3m2!1sro!2sro!4v1484306417493"
                width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>
    <!-- END: CONTENT -->
@endsection