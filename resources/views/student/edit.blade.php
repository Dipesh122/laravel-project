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
    <form action="" method="POST">
        @csrf
        @method('PATCH')
        <div>
        <input type="text" name="name" placeholder="name" value="{{ $student->name }}">
        </div>
        <div>
        <input type="text" name="age" placeholder="age" value="{{ $student->age }}">
        </div>
        <div>
        <input type="text" name="contact" placeholder="contact" value="{{ $student->contact }}">
        </div>
        <button>Submit</button>
</table>
</body>
</html>