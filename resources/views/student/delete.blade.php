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
        @method('Delete')
        <!-- <input hidden type="text" value="{{$student->id}}"> -->
        <div>
            <input type="text" name="name" disabled placeholder="name" value="{{ $student->name }}">
        </div>
        <div>
            <input type="text" name="age" disabled placeholder="age" value="{{ $student->age }}">
        </div>
        <div>
            <input type="text" name="contact" disabled placeholder="contact" value="{{ $student->contact }}">
        </div>
        <button style="color: red;">Delete</button>
        </table>
</body>

</html>