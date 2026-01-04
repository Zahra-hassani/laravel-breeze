<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 class="text-center py-4 font-bold text-2xl text-white bg-teal-800">All Students</h1>
    <table class="mx-auto my-5 w-[70%] border-2">
        <tr>
            <th class="text-center border-2 px-3 py-1">ID</th>
            <th class="text-center border-2 px-3 py-1">Name</th>
            <th class="text-center border-2 px-3 py-1">Last Name</th>
            <th class="text-center border-2 px-3 py-1">Edit</th>
            <th class="text-center border-2 px-3 py-1">Delete</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td class="text-center border-2 px-3 py-1">{{ $student->id }}</td>
                <td class="text-center border-2 px-3 py-1">{{ $student->name }}</td>
                <td class="text-center border-2 px-3 py-1">{{ $student->lastName }}</td>
                <td class="text-center border-2 px-3 py-1"><a href="{{ URL('student/edit' , $student->id) }}">Edit</a></td>
                <td class="text-center border-2 px-3 py-1"><a href="{{ URL('student/delete' , $student->id) }}">Delete</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>