@extends('backendtemplate')
@section('content')

<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          	<div class="row">
          		<div class="col">
          			<h1 class="h3 mb-0 text-gray-800">Bus Type Create Form</h1>
          		</div>
          	</div>
           </div> 
            <div class="row">
            	<div class="col-md-12">
            		<form action="{{route('bustypes.store')}}" method="post" enctype="multipart/form-data">
            			@csrf
 {{-- <div class="form-group row {{ $errors->has('id') ? 'has-error' : '' }}">
              <label for="inputid" class="col-sm-2 col-form-label">Id</label>
              <div class="col-sm-5">
                <input type="text" id="inputid" name="id" class="d-block">
                <span class="text-danger">{{ $errors->first('id') }}</span>
              </div>
            </div> --}}
            <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
              <label for="inputname" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-5">
                <input type="text" id="inputname" name="name" class="d-block">
                <span class="text-danger">{{ $errors->first('name') }}</span>
              </div>
            </div>
            <div class="form-group row {{ $errors->has('logo') ? 'has-error' : '' }}">
              <label for="inputlogo" class="col-sm-2 col-form-label">Logo</label>
              <div class="col-sm-5">
                <input type="file" id="inputlogo" name="logo" class="d-block">
                <span class="text-danger">{{ $errors->first('logo') }}</span>
              </div>
            </div>
            

  
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </div>
</form>
            		
            	
            
        
            
@endsection