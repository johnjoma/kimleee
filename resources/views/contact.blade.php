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
		

@endsection