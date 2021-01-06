@extends('master')
@section('content')
<div class="container custome-login">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<form method="POST">
				<div class="form-group">
					<label for="exampleFormControlInput1" class="form-label">Email address</label>
					<input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1" class="form-label">Password</label>
					<input type="password" class="form-control" name="password" id="exampleFormControlInput1" placeholder="">
				</div>	
				<div class="mt-5">
					<input type="submit" class="btn btn-primary" name="">
				</div>			
			</form>
			
		</div>
		
	</div>
	

</div>

@endsection