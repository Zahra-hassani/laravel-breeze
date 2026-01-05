<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="h-screen w-full flex justify-center items-center">
        <form action="{{ URL('/student/update',$student->id ) }}" method="post" class="p-4 w-[50%] border rounded flex flex-col gap-1">
        @csrf
        @method('PUT')
        <h1 class="text-center font-bold text-3xl">Update Student</h1>
        <label for="">Name:</label>
        <input type="text" name="name" value="{{ $student->name }}" class="border px3 py-1 focus:outline-none">
        <label for="">Last Name:</label>
        <input type="text" name="lastName" value="{{ $student->lastName }}" class="border px3 py-1 focus:outline-none">
        <input type="submit" value="Update" class="font-bold px-6 py-1 bg-teal-700 text-white">
        </form>
    </div>
</body>
</html>