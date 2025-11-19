<footer id="footer" class="footer-transparent">
	<div class="footer-content">
		<div class="container">
			<h3 class="sol-sm-2 col-md-2 col-sm-offset-1 col-md-offset-1">@lang('web.footer_office')</h3>

			<div class="row">
				<div class="col-md-12">

					<div class="col-md-4 jumbotron jumbotron-small jumbotron-transparent">

						<ul class="list-large list-icons">
							<a href="{{ route('contactus') }}">
								<i class="fa fa-map-marker"></i>
								<strong>@lang('web.footer_address')</strong> @lang('web.footer_address_value')
								<br>@lang('web.footer_sector')
							</a>
							<li><i class="fa fa-phone"></i><strong>@lang('web.contact_tel')</strong> @lang('web.contact_tel_value')</li>
							<li><i class="fa fa-phone"></i><strong>@lang('web.contact_mobile')</strong> @lang('web.contact_mobile_value')</li>
							<!--<li><i class="fa fa-phone"></i><strong>Fax:</strong> (+4) 021 404.34.44</li>-->
							<li>
								<i class="fa fa-envelope"></i><strong>@lang('web.contact_email')</strong> <a
									href="mailto:office@soter.ro">@lang('web.contact_email_value')</a>
							</li>
						</ul>
					</div>
					<div class="col-md-2">

						<div class="row">

							<div class=" col-md-12" style="width: 100%">
								<div class="portfolio-image effect social-links">
									<div class="img">
										<img height="500px" width="500px" src="{{URL::asset('assets/images/footer/tuv.png')}}" class="img-responsive img-rounded" alt="">
									</div>
									<div class="image-box-content">
										<p>
											<a href="https://www.tuv-austria.ro/" target="_blank"><i
													class="fa fa-link"></i></a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">

						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="col  col-md-4" style="width: 20%">
									<div class="portfolio-image effect social-links">
										<div class="img">
											<img height="500px" width="500px"
												src="{{URL::asset('assets/images/footer/Logo_C_Auditori_Blue.png')}}"
												class="img-responsive img-rounded" alt="">
										</div>
										<div class="image-box-content">
											<p>
												<a href="http://www.cafr.ro/" target="_blank"><i
														class="fa fa-link"></i></a>
											</p>
										</div>
									</div>
								</div>
								<div class="col  col-md-4" style="width: 20%">
									<div class="portfolio-image effect social-links">
										<div class="img">
											<img height="500px" width="500px"
												src="{{URL::asset('assets/images/footer/Logo_C_C_Fiscali_Blue.png')}}"
												class="img-responsive img-rounded" alt="">
										</div>
										<div class="image-box-content">
											<p>
												<a href="http://www.cameraconsultantilorfiscali.ro/" target="_blank"><i
														class="fa fa-link"></i></a>
											</p>
										</div>
									</div>
								</div>

								<div class="col  col-md-4" style="width: 20%">
									<div class="portfolio-image effect social-links">
										<div class="img">
											<img height="500px" width="500px"
												src="{{URL::asset('assets/images/footer/Logo_CECCAR_Blue.png')}}"
												class="img-responsive img-rounded" alt="">
										</div>
										<div class="image-box-content">
											<p>
												<a href="http://ceccar.ro/ro/" target="_blank"><i
														class="fa fa-link"></i></a>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-">
									<!--<div class="col col-md-6" style="width: 20%">
									<div class="portfolio-image effect social-links">
										<div class="img">
											<img height="500px" width="500px" src="{{URL::asset('assets/images/footer/Logo_EURA_Blue.png')}}" class="img-responsive img-rounded" alt="">
										</div>
										<div class="image-box-content">
											<p>
												<a href="https://www.eura-relocation.com/members/soter-srl" target="_blank"><i class="fa fa-link"></i></a>
											</p>
										</div>
									</div>
								</div>-->
									<!--<div class="col col-md-6" style="width: 60%">
									<div class="portfolio-image effect social-links">
										<div class="img">
											<img height="600px" width="600px" src="{{URL::asset('assets/images/footer/MorisonKSi.png')}}" class="img-responsive img-rounded" alt="">
										</div>
										<div class="image-box-content">
											<p>
												<a href="https://www.morisonksi.com/members/profile/soterpartners/519" target="_blank"><i class="fa fa-link"></i></a>
											</p>
										</div>
									</div>
								</div>-->
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr>

				<div class="row" style="padding-top:10px;background-color:#fcfcfc">

					<div class="copyright-text col-md-4 "> &copy;
						<script>
							document.write(new Date().getFullYear())
						</script> @lang('web.footer_copyright') <a ref="http://www.soter.ro" href="_blank"></a>
					</div>
					<div class="col-md-8 ">
						<div class="social-icons social-icons-large social-icons-colored  col-md-8/3">
							<ul>
								<li class="social-facebook"><a href="https://www.facebook.com/SOTER.Partners"
										target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="https://twitter.com/SoterRomania" target="_blank"><i
											class="fa fa-twitter"></i></a></li>
								<li class="social-linkedin"><a href="https://www.linkedin.com/company/soter-&-partners"
										target="_blank"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>