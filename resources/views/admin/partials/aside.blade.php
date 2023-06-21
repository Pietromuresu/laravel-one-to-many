

<aside class="bg-light d-flex flex-column justify-content-between">
    <div class="">
        <ul class="list-unstyled ">
            <li class="py-2 ps-4 border bg-light">
                <a href="{{route('admin.home')}}" class="text-decoration-none text-black">
                    <i class="fa-solid fa-house"></i>
                    Home
                </a>
            </li>

            <li class="py-2 ps-4 border bg-light">
                <a href="{{route('admin.projects.create')}}" class="text-decoration-none text-black">
                    <i class="fa-solid fa-plus" ></i>
                    Add new Project
                </a>
            </li>

            <li class="py-2 ps-4 border bg-light">
                <a class="nav-link" href="{{route('admin.projects.index')}}">
                    <i class="fa-solid fa-border-all"></i>
                    All projects
                </a>
            </li>

        </ul>
    </div>

    <div >
        <ul class="text-center ">
            <li class=" btn btn-dark me-4">

                <a
                class="text-white text-decoration-none "
                href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">

                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </li>
        </ul>
    </div>
</aside>
