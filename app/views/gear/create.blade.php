@extends('layouts.main')

@section('title')
	<h1>Create a New Gear Review</h1>
@stop

@section('content')

<div style="text-align:center;">
	{{ Form::open(['route' => 'gear.store']) }}

		{{ Form::label('gear_title', 'Title:') }}
		{{ Form::text('gear_title', '', array('class' => 'form-control', 'style' => 'width:75%; margin-left:auto; margin-right:auto;')) }}
		</BR>
		{{ Form::label('gear_content', 'Review:') }}
		{{ Form::textarea('gear_content', '', array('class' => 'form-control')) }}
		</BR>
		{{ Form::label('category', 'Type of Gear:') }}
		{{ Form::select('category', array('1' => 'No Category/Other',
											'2' => 'Gloves',
											'3' => 'Elbow Pads',
											'4' => 'Shoulder Pads',
											'5' => 'Stick Shafts',
											'6' => 'Stick Heads',
											'7' => 'Helmets'),
											'1', array('class' => 'form-control', 'style' => 'width:50%; margin-left:auto; margin-right:auto;')) }}
		</BR>
		{{ Form::submit('Post', array('class' => 'btn btn-primary'))}}
	{{ Form::close() }}
</div>


@stop