<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Teachers</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <x-nav-component className="h-20 w-full sticky top-0 left-0 flex justify-between items-center gap-4 px-3 bg-sky-600 text-white" />

    @if (session()->get("message"))
        <h1 class="absolute bottom-4 right-5 p-4 rounded bg-sky-600 text-white font-bold">{{ session("message") }}</h1>
    @endif
    <table class="mx-auto w-[70%] border-2 my-7">
        <tr>
            <th class="text-white border-2 border-sky-600 text-center px-3 py-1 bg-sky-600">ID</th>
            <th class="text-white border-2 border-sky-600 text-center px-3 py-1 bg-sky-600">Name</th>
            <th class="text-white border-2 border-sky-600 text-center px-3 py-1 bg-sky-600">Edit</th>
            <th class="text-white border-2 border-sky-600 text-center px-3 py-1 bg-sky-600">Delete</th>
        </tr>
        @foreach ($teachers as $teacher)
            <tr>
                <td class="px-3 py-1 text-center border-2">{{ $teacher->id }}</td>
                <td class="px-3 py-1 text-center border-2">{{ $teacher->name }}</td>
                @can('update',$teacher)
                <td class="px-3 py-1 text-center border-2"><a href="{{ URL('teacher/edit' , $teacher->id) }}">Edit</a></td>
                @endcan
                @can('delete',$teacher)
                <td class="px-3 py-1 text-center border-2">
                    <form action="{{ URL('teacher/delete',$teacher->id) }}" method="post">
                        @csrf
                        @method("DELETE")
                        <input type="submit" value="Delete">
                    </form>
                </td>
                @endcan
            </tr>
        @endforeach
    </table>
    <x-footer-component className="flex flex-col items-center bg-cyan-600 px-5 py-3 gap-0" />
</body>
</html>