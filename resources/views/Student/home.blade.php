<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <x-nav-component className="h-20 w-full sticky top-0 left-0 flex justify-between items-center gap-4 px-5 bg-teal-800 text-white" />
    {{-- <h1 class="text-center py-4 font-bold text-2xl text-white bg-teal-800">All Students</h1> --}}
    <table class="mx-auto my-5 w-[70%] border-2">
        <tr>
            <th class="text-center border-2 border-teal-800 bg-teal-800 text-white px-3 py-1">ID</th>
            <th class="text-center border-2 border-teal-800 bg-teal-800 text-white px-3 py-1">Name</th>
            <th class="text-center border-2 border-teal-800 bg-teal-800 text-white px-3 py-1">Last Name</th>
            <th class="text-center border-2 border-teal-800 bg-teal-800 text-white px-3 py-1">Edit</th>
            <th class="text-center border-2 border-teal-800 bg-teal-800 text-white px-3 py-1">Delete</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td class="text-center border-2 px-3 py-1">{{ $student->id }}</td>
                <td class="text-center border-2 px-3 py-1">{{ $student->name }}</td>
                <td class="text-center border-2 px-3 py-1">{{ $student->lastName }}</td>
                @can('edit-student',$student)
                <td class="text-center border-2 px-3 py-1"><a href="{{ URL('student/edit' , $student->id) }}">Edit</a></td>
                @endcan
                @can('delete',$student)
                <td class="text-center border-2 px-3 py-1"><a href="{{ URL('student/delete' , $student->id) }}">Delete</a></td>
                @endcan
            </tr>
        @endforeach
    </table>
    <x-footer-component className="flex flex-col items-center bg-emerald-800 px-5 py-3 gap-0" />
</body>
</html>