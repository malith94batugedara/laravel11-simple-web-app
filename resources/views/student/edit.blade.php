<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMS | Edit Student</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Edit Student</h1><a href="{{ route('student.index') }}" class="btn btn-success float-end">All Students</a><br/><br/>
    <div>
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
          <div> {{ $error }} </div>
        @endforeach
    </div>
    @endif
    </div>
    <form action="{{ route('student.update',$student->id) }}" method="post">
         @csrf
         <label>Student Name</label>
         <input type="text" name="stu_name" value="{{ $student->name }}" class="form-control" placeholder="Enter Your Name"/><br/>
         <label>Student Age</label>
         <input type="text" name="stu_age" value="{{ $student->age }}" class="form-control" placeholder="Enter Your Age"/><br/>
         <label>Student Department</label>
         <input type="text" name="stu_depart" value="{{ $student->department }}" class="form-control" placeholder="Enter Your Department Name"/><br/>
         <label>Student Address</label>
         <input type="text" name="stu_add" value="{{ $student->address }}" class="form-control" placeholder="Enter Your Address"/><br/>

         <input type="submit" value="Update" class="btn btn-success"/>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>