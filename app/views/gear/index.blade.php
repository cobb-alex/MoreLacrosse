@extends('layouts.main')

@section('title')

<h1>Gear Reviews</h1>

@stop

@section('content')

@foreach ($postings as $posting)
<div class="row">
	<div class="col-md-2"></div>
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