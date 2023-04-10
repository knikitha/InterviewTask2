<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Course</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($students as $student)
  <tbody>
    <tr>
      <th>{{ $student->id }}</th>
      <td>{{ $student->first_name }}</td>
      <td>{{ $student->last_name }}</td>
      <td>{{ $student->age }}</td>
      <td>{{ $student->course}}</td>
      <td>
          <a href="{{ url('/show/'.$student->id)}}" class="bnt btn-sm btn-info">Show</a>
          <a href="{{ url('/edit/'.$student->id)}}" class="bnt btn-sm btn-warning">Edit</a>
          <a href="{{ url('/delete/'.$student->id)}}" class="bnt btn-sm btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>