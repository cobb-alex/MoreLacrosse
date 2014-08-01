@extends('layouts.main')

@section('title')

<h1>{{ $posting->blog_title }}</h1>
<p style="text-align:right">Posted at: {{ $posting->updated_at }}</p>

@stop


@section('content')
<div class="row">
	<div class="col-md-2"></div>
		<div class="well col-md-8">
			<p>{{ $posting->blog_content}}</p>
		</div>
	<div class="col-md-2"></div>
</div>
@stop