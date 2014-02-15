@extends('layouts/master')
@section('content')
	<div class="row" id="homepage-content">
		<div class="small-12 medium-6 columns">
			<img src="{{ asset('img/gana-mockup.png') }}" alt="Ganapatih Mockup Image">
		</div>
		<div class="small-12 medium-6 columns">
			<h2>Lorem Ipsum Dolor Sit Amet</h2>
			<h4>Consectetur adipisicing elit</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, dignissimos, hic, quae quasi adipisci ad minima possimus officiis commodi placeat nemo optio ipsum voluptatibus aperiam aut sequi aspernatur provident expedita.</p>
			<p>Aspernatur, unde cupiditate earum quibusdam repellendus possimus quidem numquam voluptatem corporis. Mollitia, culpa quos id magni eos facilis rem enim sapiente ex.</p>
			<a href="#" class="small radius button"><i class="fa fa-download"></i> Download App</a>
		</div>
	</div>
	<div id="login" class="tiny reveal-modal" data-reveal>
		<h2>Sign In</h2>
		<form action="{{ route('login') }}" method="POST">
			<input type="text" placeholder="email">
			<input type="password" placeholder="password">
			<input type="submit" class="tiny radius expand button" value="Sign In">
			<p><small>doesn't have an account? register <a href="#" data-reveal-id="register" data-reveal>here</a> </small></p>
		</form>
		<a class="close-reveal-modal">&#215;</a>
	</div>
	<div id="register" class="tiny reveal-modal" data-reveal>
		<h2>Sign In</h2>
		<form action="{{ route('login') }}" method="POST">
			<input type="text" placeholder="email">
			<input type="password" placeholder="password">
			<input type="submit" class="tiny radius expand button" value="Register">
			<p><small>already have an account? sign in <a href="#" data-reveal-id="login" data-reveal>here</a> </small></p>
		</form>
		<a class="close-reveal-modal">&#215;</a>
	</div>
@stop