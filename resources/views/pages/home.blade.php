@extends('index')
@section('content')

	<!-- Start Hero Section -->
	<div class="hero">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<div class="intro-excerpt">
						<h1>L'art du <span class="text-warning">Bois</span> <span clsas="d-block">vers la <span
									class="text-warning">Tech</span></span>
						</h1>
						<p class="mb-4">
							Fusionnez le bois et la technologie pour des meubles sur mesure, uniques comme vous. Alliez
							artisanat traditionnel et innovation pour un intérieur durable et personnalisé.</p>
						<p><a href="" class="btn btn-secondary me-2">Contactez-nous</a><a href="#"
								class="btn btn-white-outline">En savoir plus</a></p>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="hero-img-wrap">


						<img src="{{asset("assets/images/ban.jpg")}}" class="img-fluid rounded-3 w-75">

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Hero Section -->

	<!-- Start Why Choose Us Section -->
	<div class="why-choose-section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-6">
					<h2 class="section-title">A propos </h2>
					<p>Kapyta est une plateforme qui vous permet de créer des meubles en bois sur mesure, selon vos
						envies et besoins. Nous travaillons main dans la main avec des artisans locaux pour offrir des
						créations uniques, tout en soutenant le savoir-faire traditionnel. Avec Kapyta, personnalisez,
						commandez et recevez vos meubles directement chez vous, en toute simplicité.</p>

					<div class="row my-5">
						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">
									<img src="{{asset("assets/images/truck.svg")}}" alt="Image" class="imf-fluid">
								</div>
								<h3>Fast &amp; Free Shipping</h3>
								<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
									vulputate.</p>
							</div>
						</div>

						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">
									<img src="{{asset("assets/images/bag.svg")}}" alt="Image" class="imf-fluid">
								</div>
								<h3>Easy to Shop</h3>
								<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
									vulputate.</p>
							</div>
						</div>

						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">
									<img src="{{asset("assets/images/support.svg")}}" alt="Image" class="imf-fluid">
								</div>
								<h3>24/7 Support</h3>
								<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
									vulputate.</p>
							</div>
						</div>

						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">
									<img src="{{asset("images/return.svg")}}" alt="Image" class="imf-fluid">
								</div>
								<h3>Hassle Free Returns</h3>
								<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
									vulputate.</p>
							</div>
						</div>

					</div>
				</div>

				<div class="col-lg-5">
					<div class="img-wrap">
						<img src="{{asset("assets/images/why-choose-us-img.jpg")}}" alt="Image" class="img-fluid">
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Why Choose Us Section -->


	<!-- Start Testimonial Slider -->
	<div class="testimonial-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 mx-auto text-center">
					<h2 class="section-title">Avis de nos clients</h2>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="testimonial-slider-wrap text-center">

						<div id="testimonial-nav">
							<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
							<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
						</div>

						<div class="testimonial-slider">

							<div class="item">
								<div class="row justify-content-center">
									<div class="col-lg-8 mx-auto">

										<div class="testimonial-block text-center">
											<blockquote class="mb-5">
												<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae
													odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
													vulputate velit imperdiet dolor tempor tristique. Pellentesque
													habitant morbi tristique senectus et netus et malesuada fames ac
													turpis egestas. Integer convallis volutpat dui quis
													scelerisque.&rdquo;</p>
											</blockquote>

											<div class="author-info">
												<div class="author-pic">
													<img src="{{asset("assets/images/person-1.png")}}" alt="Maria Jones" class="img-fluid">
												</div>
												<h3 class="font-weight-bold">Maria Jones</h3>
												<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- END item -->

							<div class="item">
								<div class="row justify-content-center">
									<div class="col-lg-8 mx-auto">

										<div class="testimonial-block text-center">
											<blockquote class="mb-5">
												<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae
													odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
													vulputate velit imperdiet dolor tempor tristique. Pellentesque
													habitant morbi tristique senectus et netus et malesuada fames ac
													turpis egestas. Integer convallis volutpat dui quis
													scelerisque.&rdquo;</p>
											</blockquote>

											<div class="author-info">
												<div class="author-pic">
													<img src="{{asset("assets/images/person-1.png")}}" alt="Maria Jones" class="img-fluid">
												</div>
												<h3 class="font-weight-bold">Maria Jones</h3>
												<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- END item -->

							<div class="item">
								<div class="row justify-content-center">
									<div class="col-lg-8 mx-auto">

										<div class="testimonial-block text-center">
											<blockquote class="mb-5">
												<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae
													odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
													vulputate velit imperdiet dolor tempor tristique. Pellentesque
													habitant morbi tristique senectus et netus et malesuada fames ac
													turpis egestas. Integer convallis volutpat dui quis
													scelerisque.&rdquo;</p>
											</blockquote>

											<div class="author-info">
												<div class="author-pic">
													<img src="{{asset("assets/images/person-1.png")}}" alt="Maria Jones" class="img-fluid">
												</div>
												<h3 class="font-weight-bold">Maria Jones</h3>
												<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- END item -->

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Testimonial Slider -->

	<!-- Start Blog Section -->
	<div class="blog-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6">
					<h2 class="section-title">Nos réalisations</h2>
				</div>
				<div class="col-md-6 text-start text-md-end">
					<a href="#" class="more">Voir plus</a>
				</div>
			</div>

			<div class="row">

				<div class="col-12 col-sm-6 col-md-4  mb-md-0">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="{{asset("images/post-1.jpg")}}" alt="Image"
								class="img-fluid"></a>
						<div class="post-content-entry">
							<h3><a href="#">First Time Home Owner Ideas</a></h3>
							<div class="meta">
								<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19,
										2021</a></span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4 mb-md-0">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="{{asset("assets/images/post-2.jpg")}}" alt="Image"
								class="img-fluid"></a>
						<div class="post-content-entry">
							<h3><a href="#">How To Keep Your Furniture Clean</a></h3>
							<div class="meta">
								<span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4  mb-md-0">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="{{asset("assets/images/post-3.jpg")}}" alt="Image"
								class="img-fluid"></a>
						<div class="post-content-entry">
							<h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
							<div class="meta">
								<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12,
										2021</a></span>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Blog Section -->

	<div class="untree_co-section"></div>
	<div class="container">
		<div class="text-center mb-5">

			<h2 class="section-title">Contactez-nous</h2>


		</div>
		<div class="block">
			<div class="row justify-content-center">


				<div class="col-md-8 col-lg-8 pb-4">


					<div class="row mb-5">
						<div class="col-lg-4">
							<div class="service no-shadow align-items-center link horizontal d-flex active"
								data-aos="fade-left" data-aos-delay="0">
								<div class="service-icon color-1 mb-4">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
										<path
											d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
									</svg>
								</div> <!-- /.icon -->
								<div class="service-contents">
									<p>Adidogomé, Kohé, Boulevard du 30 Août</p>
								</div> <!-- /.service-contents-->
							</div> <!-- /.service -->
						</div>

						<div class="col-lg-4">
							<div class="service no-shadow align-items-center link horizontal d-flex active"
								data-aos="fade-left" data-aos-delay="0">
								<div class="service-icon color-1 mb-4">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-envelope-fill" viewBox="0 0 16 16">
										<path
											d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
									</svg>
								</div> <!-- /.icon -->
								<div class="service-contents">
									<p>kapytatech@gmail.com</p>
								</div> <!-- /.service-contents-->
							</div> <!-- /.service -->
						</div>

						<div class="col-lg-4">
							<div class="service no-shadow align-items-center link horizontal d-flex active"
								data-aos="fade-left" data-aos-delay="0">
								<div class="service-icon color-1 mb-4">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-telephone-fill" viewBox="0 0 16 16">
										<path fill-rule="evenodd"
											d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
									</svg>
								</div> <!-- /.icon -->
								<div class="service-contents">
									<p>+228 97 26 17 47</p>
								</div> <!-- /.service-contents-->
							</div> <!-- /.service -->
						</div>
					</div>

					<form>
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label class="text-black" for="fname">Votre nom complet</label>
									<input type="text" class="form-control" id="fname">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label class="text-black" for="lname">Adresse email</label>
									<input type="email" class="form-control" id="lname">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="text-black" for="email">Objet du mail</label>
							<input type="text" class="form-control" id="email">
						</div>

						<div class="form-group mb-5">
							<label class="text-black" for="message">Message</label>
							<textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
						</div>

						<button type="submit" class="btn btn-secondary">Envoyer un message</button>
					</form>

				</div>

			</div>

		</div>

	</div>


	</div>


@endsection