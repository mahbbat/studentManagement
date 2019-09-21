@extends('layout')
@section('content')
<h1>Create New Student</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" data-parsley-validate action="{{route('store')}}">
{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Student Name</label>
    <input type="text" class="form-control" id="name" required name="student_name" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Registration No</label>
    <input type="intput" class="form-control" required id="registration" data-parsley-type="digits" name="registration_id" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Department Name</label>
    <input type="intput" class="form-control" required id="department" name="student_department" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
     <textarea class="form-control" id="info" name="info" rows="5"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
