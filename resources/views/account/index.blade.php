@extends('index')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/account/style.css') }}">
<main>
	<h2>Weekly Coding Challenge #1: Sign in/up Form</h2>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			@if(Session::has('success'))
			<div>
				{{Session::get('success')}}
			</div>
			@endif
			<form id="register-form">
				@csrf
				<h1>Create Account</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your email for registration</span>
				<input type="text" name="name" placeholder="Name" />
				<input type="email" name="email" placeholder="Email" />
				<input type="password" name="password" placeholder="Password" />
				<button>Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form>
				@csrf
				<h1>Sign in</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your account</span>
				<input type="email" placeholder="Email" />
				<input type="password" placeholder="Password" />
				<a href="#">Forgot your password?</a>
				<button>Sign In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Enter your personal details and start journey with us</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>
</main>
<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer>

<script type="text/javascript" src="{{ asset('assets/js/account/main.js') }}"></script>
<script>
	$(document).ready(function() {
		$('#register-form').on('submit', function(e) {
			e.preventDefault();
			var formData = $(this).serialize();

			$.ajax({
				type: 'POST',
				url: `{{ route('register.login') }}`,
				data: formData,
				success: function(response) {
					// Xử lý phản hồi thành công từ máy chủ
					console.log(response);
					// Điều hướng hoặc hiển thị thông báo thành công tùy ý
				},
				error: function(response) {
					// Xử lý lỗi từ máy chủ
					console.log(response.responseJSON);
					// Hiển thị thông báo lỗi hoặc các trường lỗi tùy ý
				}
			});
		});
	});
</script>
@endsection