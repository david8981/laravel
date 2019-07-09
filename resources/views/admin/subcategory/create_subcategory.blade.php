{{-- extending the layout --}}
@extends('layouts.adminlayout.adminapp')

@section('breadcamp')
<ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin/category">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
</ul>
@endsection

@section('content')

	{!! Form::open(['method'=>'POST','url'=>route('category.store'),'files'=>true]) !!}

	<div class="form-group">
		{!! Form::label('category_id','Category Name:',['class'=>'form-control-label']) !!}
		{!! Form::select('category_id',[$category->all()]) !!}
	</div>

	<div class="form-group">
		{!! Form::label('name','Name :',['class'=>'form-control-label']) !!}
		{!! Form::text('name',null,['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('image','Image :',['class'=>'form-control-label']) !!}
		{!! Form::file('image') !!}
	</div>

	{{-- Category Slug --}}

	<div class="form-group">
		{!! Form::label('slug','Slug :',['class'=>'form-control-label']) !!}
		{!! Form::text('slug',null,['class'=>'form-control']) !!}
	</div>

	{{-- Description Slug --}}

	<div class="form-group">
		{!! Form::label('description','Description :',['class'=>'form-control-label']) !!}
		{!! Form::textarea('description',null,['class'=>'form-control','cols'=>'20','rows'=>'4']) !!}
	</div>


	<div class="form-group">
		{!! Form::label('status','status :',['class'=>'form-control-label']) !!}
		{!! Form::select('status',array('1'=>'Active','0'=>'In-active')) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Add Category',['class'=>'btn btn-primary']) !!}   
	</div>
	{!! Form::close() !!}

@endsection