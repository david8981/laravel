{{-- extending the layout --}}
@extends('layouts.adminlayout.adminapp')

@section('breadcamp')
<div class="row">
  <div class="col-md-9">
    <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/admin/category">Home</a></li>
                  <li class="breadcrumb-item active">Category</li>
    </ul>
  </div>
  <div class="col-md-3">
   <a href="{{ route('category.create') }}" class="btn btn-primary" style="margin-top: 4px;">Add New Category</a>
  </div>
</div>
@endsection

@section('content')

@if(session('success'))
    <div class="alert alert-success" style="margin-top: 8px;">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered" id="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Action</th>
		</tr>
	</thead>
</table>

		
@endsection


@section('stylesheets')

<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('scripts')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
         $(function() {
               $('#table').DataTable({
               processing: true,
               serverSide: true,
               ajax: '{{ route('dt_ajax_category') }}',
               columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'action', name: 'action' }
                     ]
            });
         });
</script>
@endsection