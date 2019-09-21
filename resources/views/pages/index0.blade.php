    @extends('layout')
    @section('content')
      <div class="container">
          <table class="table table-responsive table-hover">

            <tr>

                  <th> ID </th>
                  <th> Sutdent Name </th>
                  <th> Departmnet Name </th>
                  <th> Description </th>

              </tr>
                @foreach ($username as $student)
              <tr>

              <td>{{$student->id}}</td>
              <td>{{$student->student_name}}</td>
              <td>{{$student->student_department}}</td>
              <td>{{$student->info}}</td>

              </tr>
              @endforeach
          </table>

        </div>
  @endsection
