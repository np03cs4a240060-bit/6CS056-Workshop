<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>

    <h1>Edit Course</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/courses/{{ $course->id }}" method="POST">
        @csrf
        @method('PUT')

        @include('course.form')

        <button type="submit">Update Course</button>
    </form>

    <br>

    <a href="/courses">Back to Courses</a>

</body>
</html>
