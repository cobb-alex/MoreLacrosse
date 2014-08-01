@extends('layouts.main')

@section('title')

<h1>Blog</h1>

@stop

@section('content')

@foreach ($postings as $posting)
<div class="row">
	<div class="col-md-2"></div>
	<div class="panel panel-default col-md-8">
		<div class="panel-heading">
			<h1 class="panel-title" style="text-align:center; font-size:24px;">{{ link_to("/blog/{$posting -> blog_title}", $posting->blog_title) }}</h1>
			<p style="text-align:right">Posted at: {{ $posting->updated_at }}</p>
		</div>
		<div class="panel-body">
			@if (strlen($posting->blog_content) > 500 )
				<p>{{ Str::words($posting->blog_content, 300) }}</p>
				</BR>
				<p>{{ link_to("/blog/{$posting -> blog_title}", "Read More") }}</p>
			@else
				<p>{{ $posting->blog_content }}</p>
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