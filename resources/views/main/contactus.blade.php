@extends('main.layouts.master')

@section('body')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-uppercase">Contact us!</h3><br> Do you want to meet us?<br /> Want to find out more
                    about Soter & Partners’ services?<br />
                    Please contact us using the contact form<br /> or any other contact information listed below.<br /> We
                    will respond as soon as possible.</br></br>
                    <strong>For any GDPR issue</br>
                        <em>(General Data Protection Regulation)</em> </br>
                        please send us an email at gdpr@soter.ro</strong>
                    <div class="row m-t-40">
                        <div class="col-md-6">
                            <address>
                                <strong>Soter SRL</strong><br>
                                Mendeleev 28-30, corp C1
                                <br>Sector 1
                                <br>București
                                <br>Tel: (+4) 021 316.80.75
                                <br>Mobile: (+4) 0788.407.403
                                <br>Email: office@soter.ro
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
                                <label for="name">Name and surname</label>
                                <input type="text" aria-required="true" name="widget-contact-form-name"
                                    class="form-control required name" placeholder="Enter name and surname ">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" aria-required="true" name="widget-contact-form-email"
                                    class="form-control required email" placeholder="Enter email ...">
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
                            <label for="message">Message</label>
                            <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control required"
                                placeholder="Enter your message ..."></textarea>
                        </div>
                        <input type="text" class="hidden" id="widget-contact-form-antispam"
                            name="widget-contact-form-antispam" value="blow" />
                        <div>
                            <p>You&#39re passioned about your work and you want to join Soter & Partners team?<br>
                                Send us <strong> <a href="https://soter.ro/cariere"> your resume! </a></strong></p>
                        </div>

                        <button class="btn btn-primary" type="submit" id="form-submit"><i
                                class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                    </form>


                    <script type="text/javascript">
                        jQuery("#widget-contact-form").validate({
                            submitHandler: function (form) {
                                jQuery(form).ajaxSubmit({
                                    success: function (text) {
                                        if (text.response == 'success') {
                                            $.notify({
                                                message: "You have successfully send as a message! We get back to you quickly as possible!"
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