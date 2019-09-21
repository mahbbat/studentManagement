    @extends('layout')
    @section('content')
      <div class="container">
          <table class="table table-responsive table-hover">

            <tr>

                  <th> Serial No </th>
                  <th> Sutdent Name </th>
                  <th> Registration </th>
                  <th> Departmnet Name </th>
                  <th> Description </th>
                  <th> Action </th>
              </tr>
              <?php $serial=1; ?>
                @foreach ($username as $student)
              <tr>

              <td>{{$serial++}}</td>
              <td>{{$student->student_name}}</td>
              <td>{{$student->registration_id}}</td>
              <td>{{$student->student_department}}</td>
              <td>{{$student->info}}</td>
              <td>
                <form method="post">
                 <a class="nav-link" href="{{ route('edit',$student->id) }}">Edit</a>
               </form>
               </td>
               <td>
                 <form method="post">
                   {{csrf_field()}}
                  <a class="nav-link" onclick="return confirm('Do you want to Delete')" href="{{ route('destroy',$student->id) }}">Delete</a>
                </form>
                </td>
              </tr>
              @endforeach
          </table>

        </div>
  @endsection
