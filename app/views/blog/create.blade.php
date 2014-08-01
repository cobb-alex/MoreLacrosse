@extends('layouts.main')

@section('title')
	<h1>Create a New Blog Post</h1>
@stop

@section('content')

<div style="text-align:center;">
	{{ Form::open(['route' => 'blog.store']) }}

		{{ Form::label('blog_title', 'Title:') }}
		{{ Form::text('blog_title', '', array('class' => 'form-control')) }}

		{{ Form::label('blog_content', 'Post:') }}
		{{ Form::textarea('blog_content', '', array('class' => 'form-control')) }}

		{{ Form::submit('Post')}}
	{{ Form::close() }}

@stop