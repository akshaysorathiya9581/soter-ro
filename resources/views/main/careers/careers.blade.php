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
                                        Have you got professional experience <br /> in one of Soter & Partners’ activity
                                        areas?<br />

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
                                        You’re passioned about your work <br /> and you want to join Soter & Partners
                                        team?<br />

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
                                    <h4> We want to meet you! </h4>
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
                                        Send us your resume <br /> and we’ll get back to you.<br /> Even if we don’t have an
                                        available job <br /> at Soter, there are many different <br /> employment
                                        opportunities<br /> through our projects, <br /> developed with our business
                                        partners.
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
                        <label for="name">Name and surname</label>
                        <input type="text" aria-required="true" name="widget-contact-form-name"
                            class="form-control required name" placeholder="Name and surname ...">
                    </div>
                    <div class="form-group p col-sm-8 col-sm-offset-2">
                        <label for="email">Email</label>
                        <input type="email" aria-required="true" name="widget-contact-form-email"
                            class="form-control required email" placeholder="Email ...">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-8 col-sm-offset-2">
                        <label for="phone">Phone</label>
                        <input type="text" name="widget-contact-form-phone" class="form-control required"
                            placeholder="Phone...">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group p col-sm-8 col-sm-offset-2">
                        <label for="message">Message</label>
                        <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control required"
                            placeholder="Message..." id="mess"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group p col-sm-8 col-sm-offset-2">
                        <label for="message">Field of interest</label>
                        <textarea type="text" name="widget-contact-form-domain" rows="1" class="form-control required"
                            placeholder="Field..." id="mess"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group p col-sm-8 col-sm-offset-2">
                        <label for="message">Attach CV<small>*</small></label>
                        <input type="file" aria-required="true" name="widget-contact-form-attachment" value=""
                            class="form-control required" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group p col-sm-8 col-sm-offset-2">
                        <input type="text" class="hidden" id="widget-contact-form-antispam"
                            name="widget-contact-form-antispam" value="blow" />
                        <button class="btn btn-primary" type="submit" id="form-submit"><i
                                class="fa fa-paper-plane"></i>&nbsp;Send!</button>
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