
@extends('layouts.app')
@section('main-content')
		
		<div class="main-container">
		<section class="team-1">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h1>Hire Us</h1>
						</div>
					</div>
					
					<div class="row space-bottom-large">
						
						
						
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


<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=file] {
  background-color: #999;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
}
input[type=submit] {
  background-color:#4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
  margin-left:30%;
  
}



input[type=submit]:hover {
  background-color: #45a049;
  
}

.container2 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 15%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width:60%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75{
    width: 80%;
    margin-top: 0;
    margin-left:10%;
    margin-right:5%;
  }
}

@media screen and (max-width: 600px) {
  input[type=submit] {
    width: 50%;
    margin-top: 0;
    float:left;
    margin-left:30%
  }
}
  

</style>
<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
                        <h2><strong>Details Form</strong></h2>
<p>Please fill the form below with the required details</p>

						</div>
					</div>

<div class="container2">
  <form method="POST" action="{{route('hires.store')}}">
      @csrf
  <div class="row">
    <div class="col-25">
      <label for="fname">Name:</label>
    </div>
    <div class="col-75">
      <input type="text" name="name" placeholder="Your name or company name">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Email:</label>
    </div>
    <div class="col-75">
      <input type="text" name="email" placeholder="Your email or company email">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="type">Type of Website:</label>
    </div>
    <div class="col-75">
      <select id="type" name="type">
      <option selected>Choose...</option>
        <option value="personal">Personal</option>
        <option value="blog">Blog</option>
        <option value="ecommerce">E-commerce/shop</option>
        <option value="coprporate">Corporate..School, company</option>
        <option value="service">Service...i.e car hire, cleaning. etc</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">More Info:</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Add more info...." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
  <div class="col-25">
      <label for="subject">Upload Important documents</label>
    </div>
    <div class="col-75">
    <div class="custom-file">
    <input type="file" class="custom-file-input" name="document">
  </div>
    </div>
  </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>



							</div>
						</div>
						
					
			</section>
			
			
        </div>
        <hr>
		
		@endsection
				