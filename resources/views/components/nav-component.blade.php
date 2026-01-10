<nav class="{{ $className }}">
    <img src="./school.png" class="h-full w-20" alt="">
    <ul class="flex justify-between items-center gap-4 px-3">
        <li class="hover: transition-all duration-300"><a href="/">Home</a></li>
        {{-- <li class="hover: transition-all duration-300"><a href="/dashboard">Dashboard</a></li> --}}
        <li class="hover: transition-all duration-300 group relative cursor-pointer">Student <i class="fas fa-chevron-down"></i>
            <ul class="h-fit opacity-0 group-hover:opacity-100 w-[200%] flex flex-col text-black absolute top-8 left-0">
                <li class="hover:bg-neutral-200 transition-all duration-300 bg-white py-1.5 px-2 hover:px-5"><a href="/student">All</a></li>
            </ul>
        </li>
        <li class="hover: transition-all duration-300 group relative cursor-pointer">Teacher <i class="fas fa-chevron-down"></i>
            <ul class="h-fit opacity-0 group-hover:opacity-100 w-[200%] flex flex-col text-black absolute top-8 left-0">
                <li class="hover:bg-neutral-200 transition-all duration-300 bg-white py-1.5 px-2 hover:px-5"><a href="/teacher">All</a></li>
            </ul>
        </li>
    </ul>
    <div class="flex justify-between items-center gap-4 text-white">
        <a href="/dashboard"><i class="fas fa-magnifying-glass text-xl" title="Search"></i></a>
        <a href="/dashboard"><i class="fas fa-user-circle text-xl" title="User Dashboard"></i></a>
        <a href="/dashboard"><i class="fas fa-circle-info text-xl" title="About Us"></i></a>
    </div>
</nav>