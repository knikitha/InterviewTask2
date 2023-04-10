
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Student</title>
  </head>
  <body>

  
  @if($layout == 'index')
  <div class="container-fluid">
      <h2 class="text-center alert alert-danger">Laravel CRUD Application</h2>
      <div class="row">
          <section class="col">
          @include("studentlist")
          </section>
          <section class="col"></section>
      </div>
  </div>
  @elseif($layout == 'create')
  <div class="container-fluid">
      <h2 class="text-center alert alert-danger">Laravel CRUD Application</h2>
      <div class="row">
          <section class="col">
          @include("studentlist")
          </section>
<section class="col">
<form action="{{ url('/store') }}" method="POST">
@csrf
  <div class="form-group">
    <label >First Name</label>
    <input name="first_name"  type="text" class="form-control"  placeholder="Enter First Name">
  </div>

  <div class="form-group">
    <label >Last Name</label>
    <input name="last_name"  type="text" class="form-control"  placeholder="Enter Last Name">
  </div>

  <div class="form-group">
    <label >Age</label>
    <input name="age" type="text" class="form-control"  placeholder="Enter Age">
  </div>

  <div class="form-group">
    <label >Course</label>
    <input name="course"  type="text" class="form-control"  placeholder="Enter Course">
  </div>
  <button type="submit" class="btn btn-info mb-2">Save</button>

</form>
          </section>


          </div>
  </div>
  @elseif($layout == 'show')
  <div class="container-fluid">
      <h2 class="text-center alert alert-danger">Laravel CRUD Application</h2>
      <div class="row">
          <section class="col">
          @include("studentlist")
          </section>
          <section class="col">
          <h6 class="text-center alert alert-info">Student Information</h6>
          <form action="" method="POST">
@csrf

  <div class="form-group">
    <label >First Name</label>
    <input value="{{ $student->first_name }}" name="first_name"  type="text" class="form-control"  placeholder="Enter First Name" readonly="">
  </div>

  <div class="form-group">
    <label >Last Name</label>
    <input value="{{ $student->last_name }}" name="last_name"  type="text" class="form-control"  placeholder="Enter Last Name" readonly="">
  </div>

  <div class="form-group">
    <label >Age</label>
    <input value="{{ $student->age }}" name="age" type="text" class="form-control"  placeholder="Enter Age" readonly="">
  </div>

  <div class="form-group">
    <label >Course</label>
    <input value="{{ $student->course }}" name="course"  type="text" class="form-control"  placeholder="Enter Course" readonly="">
  </div>
</form>
          </section>
      </div>
  </div>
  @elseif($layout == 'edit')
  <div class="container-fluid">
      <h2 class="text-center alert alert-danger">Laravel CRUD Application</h2>
      <div class="row">
          <section class="col">
          @include("studentlist")
          </section>
          <section class="col">
<form action="{{ url('/update/'.$student->id)}}" method="POST">
@csrf

  <div class="form-group">
    <label >First Name</label>
    <input value="{{ $student->first_name }}" name="first_name"  type="text" class="form-control"  placeholder="Enter First Name" >
  </div>

  <div class="form-group">
    <label >Last Name</label>
    <input value="{{ $student->last_name }}" name="last_name"  type="text" class="form-control"  placeholder="Enter Last Name" >
  </div>

  <div class="form-group">
    <label >Age</label>
    <input value="{{ $student->age }}" name="age" type="text" class="form-control"  placeholder="Enter Age" >
  </div>

  <div class="form-group">
    <label >Course</label>
    <input value="{{ $student->course }}" name="course"  type="text" class="form-control"  placeholder="Enter Course">
  </div>
  <button type="submit" class="btn btn-success mb-2">Update</button>

</form>
          </section>
      </div>
  </div>
  @endif


          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>

</html>