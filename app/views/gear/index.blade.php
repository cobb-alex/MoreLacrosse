@extends('layouts.main')

@section('title')

<h1>Gear Reviews</h1>
<h4>Categories:</h4>
<a href="/gear">All({{ $all }})</a>
<a href="/gear-type/gloves" style="margin-left:3em;">Gloves({{ $gloves }})</a>
<a href="/gear-type/elbows" style="margin-left:3em;">Elbow Pads({{ $elbows }})</a>
<a href="/gear-type/shoulders" style="margin-left:3em;">Shoulder Pads({{ $shoulders }})</a>
<a href="/gear-type/helmets" style="margin-left:3em;">Helmets({{ $helmets }})</a>
<a href="/gear-type/shafts" style="margin-left:3em;">Stick Shafts({{ $shafts }})</a>
<a href="/gear-type/heads" style="margin-left:3em;">Stick Heads({{ $heads }})</a>
<a href="/gear-type/other" style="margin-left:3em;">Other({{ $misc }})</a>

@stop

@section('content')

@foreach ($postings as $posting)
<div class="row">
	<div class="col-md-2">
	</div>
	<div class="panel panel-default col-md-8">
		<div class="panel-heading">
			<h1 class="panel-title" style="text-align:center; font-size:24px;">{{ link_to("/gear/{$posting -> gear_title}", $posting->gear_title) }}</h1>
			<p style="text-align:right">Posted at: {{ $posting->updated_at }}</p>
		</div>
		<div class="panel-body">
			@if (strlen($posting->gear_content) > 500 )
				<p>{{ Str::words($posting->gear_content, 300) }}</p>
				</BR>
				<p>{{ link_to("/gear/{$posting -> gear_title}", "Read More") }}</p>
			@else
				<p>{{ $posting->gear_content }}</p>
			@endif
		</div>
	</div>
<div class="col-md-2"></div>
</div>
@endforeach


<div style="text-align:center;">
	<?php echo $postings->links(); ?>
</div>

@stop