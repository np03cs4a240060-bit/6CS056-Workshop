<!DOCTYPE html>
<html>
<head>
    <title>Create Course</title>
</head>
<body>

    <h1>Create Course</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/courses" method="POST">
        @csrf

        @include('course.form')

        <button type="submit">Save Course</button>
    </form>

    <br>

    <a href="/courses">Back to Courses</a>

</body>
</html>
