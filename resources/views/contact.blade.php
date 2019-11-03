@extends('layouts.app')
@section('main-content')
@include('layouts.slider')

<div class="main-container">
		
			
			<section class="contact-thirds">
				<div class="container">
					<div class="row">
							<div class="col-sm-12 text-center">
								<h1>Contact Us<br>
								We'd love to hear from you.
								</h1>
							</div>
					</div>
					
					<div class="row">
						<div class="col-sm-4">
							<h5>Enquiries About</h5>
							<ul style="list-style-type:disc;">
							<li>Web Design</li>
							<li>Blogs</li>
							<li>Corporate website</li>
							<li>Personal webisite</li>
							<li>Ecommerce website</li>
                            </ul>
						</div>
						
						<div class="col-sm-4 text-center">
							<h5>Details</h5>
							<!--<p class="lead">Kiewit Building 
		<br>200 Avenue Street ,&nbsp;Chicago<br><br>+70 424 495 952 -->
		<p class="lead">Phone number: 
		<br>+254705559177
		<br>johnturinjoma@gmail.com<br></p>
						</div>
						
						<div class="col-sm-4">
							<h5>Leave A Message</h5>
							<div class="form-wrapper clearfix">

							<div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
	<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
								<form  method="POST" action="{{route('contacts.store')}}">
								
								<div class="form-group">
              @csrf
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="price">Email :</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="quantity">Message:</label>
              <textarea name="message" class="form-control rounded-0" placeholder="Your Message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
								</form>

								
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<hr>
		

@endsection