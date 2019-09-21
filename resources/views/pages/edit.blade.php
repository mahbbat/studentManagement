@extends('layout')
@section('content')
<h1>Update Student</h1>

<form method="post" action="{{route('update',$id->id)}}" >
{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Student Name</label>
    <input type="text" class="form-control" id="name" value="{{$id->student_name}}" name="student_name" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Registration No</label>
    <input type="intput" class="form-control" id="registration" value="{{$id->registration_id}}" name="registration_id" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Department Name</label>
    <input type="intput" class="form-control" id="department" value="{{$id->student_department}}" name="student_department" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
     <textarea class="form-control" id="info" value="" name="info" rows="5">{{$id->info}}</textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
