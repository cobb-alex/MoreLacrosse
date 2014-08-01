@extends('layouts.main')

@section('title')
<h1>About Us</h1>
@stop

@section('content')

<div class="row" style="text-align:center;">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Alex Cobb</h3>
			</div>
			<div class="panel-body">
				<p style="text-align:left;">{{ HTML::image('images/alex.png', 'Alex Cobb', array('style' => 'text-align:left;')) }}</p>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Tom Mudrak</h3>
			</div>
			<div class="panel-body">
				<p>Hi</p>
			</div>
		</div>
	</div>
</div>

@stop