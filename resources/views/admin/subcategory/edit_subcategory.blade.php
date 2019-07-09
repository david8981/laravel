{{-- extending the layout --}}
@extends('layouts.adminlayout.adminapp')

@section('breadcamp')
<ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin/category">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
</ul>
@endsection

@section('content')

	{!! Form::open(['method'=>'PATCH','url'=>route('category.update',$result->id),'files'=>true]) !!}

	<div class="form-group">
		{!! Form::label('name','Name :',['class'=>'form-control-label']) !!}
		{!! Form::text('name',$result->name,['class'=>'form-control']) !!}
	</div>
    
    <div class="form-group">
		{!! Form::label('image','Image :',['class'=>'form-control-label']) !!}
		{!! Form::file('image') !!}
	</div>

	{{-- Category Slug --}}

	<div class="form-group">
		{!! Form::label('slug','Slug :',['class'=>'form-control-label']) !!}
		{!! Form::text('slug',$result->slug,['class'=>'form-control']) !!}
	</div>
    
    {{-- Description Slug --}}

	<div class="form-group">
		{!! Form::label('description','Description :',['class'=>'form-control-label']) !!}
		{!! Form::textarea('description',$result->description,['class'=>'form-control','cols'=>'20','rows'=>'4']) !!}
	</div>


	<div class="form-group">
		{!! Form::label('status','status :',['class'=>'form-control-label']) !!}
		{!! Form::select('status',array('1'=>'Active','0'=>'In-active'),$result->status) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Add Category',['class'=>'btn btn-primary']) !!}   
	</div>
	{!! Form::close() !!}

@endsection