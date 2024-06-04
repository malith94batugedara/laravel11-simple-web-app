<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Students</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
</head>
<body>

    <div class="container mt-4">
        <h1 class="text-center">All Students</h1><a href="{{ route('student.create') }}" class="btn btn-success float-end">Add Student</a><br/><br/>
         @if(session('status'))
              <div class="alert alert-success">
                   {{ session('status') }}
              </div>
         @endif
         <table class="table table-bordered table-dark">
              <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Student Age</th>
                    <th>Student Department</th>
                    <th>Student Address</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($students as $student)
                    
                
                <tr>
                    <td>{{$student->name}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->department}}</td>
                    <td>{{$student->address}}</td>
                    <td>
                        <a href="{{ route('student.edit',$student->id) }}" class="btn btn-success">Edit</a>
                        <a href="{{ route('student.delete',$student->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

                @endforeach
              </tbody>
         </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
