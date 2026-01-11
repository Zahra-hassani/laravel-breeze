<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Teacher</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="flex justify-center items-center h-screen w-full">
        <form action="{{ URL('teacher/update',$teacher->id) }}" method="post" class="h-fit w-6/12 rounded-md border shadow flex flex-col gap-4 p-4">
            <h1 class="font-bold text-center py-4">Update Teacher</h1>
            @csrf
            <input value="{{ $teacher->name }}" type="text" name="name" class="border px-3 py-1 focus:outline-none">
            <input type="submit" class="bg-cyan-600 text-white px-6 py-1 rounded-md w-fit mx-auto" value="Update">
        </form>
    </div>
</body>
</html>