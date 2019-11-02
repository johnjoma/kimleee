@extends('layouts.app')
@section('main-content')

<div class="main-container">
		
			
			<section class="contact-thirds">
				<div class="container">
					<div class="row">
							<div class="col-sm-12 text-center">
								<h1>Contact Us<br>
								We'd love to hear from you
								</h1>
							</div>
					</div>
					
					<div class="row">
						<div class="col-sm-4">
							<h5>Enquiries</h5>
							<p>
								Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus. 
							</p>
							
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
						
						<div class="col-sm-4 text-center">
							<h5>Details</h5>
							<p class="lead">Kiewit Building 
		<br>200 Avenue Street ,&nbsp;Chicago<br><br>+70 424 495 952 
		<br>contact@realestate.com<br></p>
						</div>
						
						<div class="col-sm-4">
							<h5>Leave A Message</h5>
							<div class="form-wrapper clearfix">
								<form  method="POST" action="{{route('contacts.store')}}">
								@csrf
									<div class="inputs-wrapper">
										<input class="form-name validate-required" type="text" placeholder="Your Name" name="name">
										<input class="form-email validate-required validate-email" type="text" placeholder="Your Email Address" name="email">
										<textarea class="form-message validate-required" name="message" placeholder="Your Message"></textarea>
									</div>

									<button  type="submit" class="btn btn-primary" >Send Form</button>
									<div class="form-success">
										<span class="text-white">Message sent - Thanks for your enquiry</span>
									</div>
									<div class="form-error">
										<span class="text-white">Please complete all fields correctly</span>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		

@endsection