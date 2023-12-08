<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>
<body>
    @if($errors-> any())
    <ul>
        @foreach($errors->all() as $error)
        <li style="color:red;">{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form action="/student" method="POST">
        @csrf
        <div>
        <input type="text" name="name" placeholder="name">
        </div>
        <div>
        <input type="text" name="age" placeholder="age">
        </div>
        <div>
        <input type="text" name="contact" placeholder="contact">
        </div>
        <button>Submit</button>
    </form>
<table class="table table-borderless">
  <tbody>
    @foreach($students as $student) 
    <tr>
        <td>{{ $student->name }}</td>
        <td>{{ $student->age }}</td>
        <td>{{ $student->contact }}</td>
        <td><a style="color:green;" href="/student/{{ $student->id }}">Edit</a>
        <form action="{{ route('student.destroy', $student->id) }}" method="post">
            @csrf
            @method('delete')
        <button style="color: red;">Delete</button>
        </form>
    </td>
        
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>