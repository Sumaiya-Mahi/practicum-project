<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            

            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.categorys')}}">
                    <span data-feather="box"></span>
                    categorys
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.services')}}">
                    <span data-feather="shopping-cart"></span>
                    services
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.packages')}}">
                    <span data-feather="package"></span>
                    packages
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.appoinment')}}">
                    <span data-feather="codepen"></span>
                    appoinment
                </a>
            </li>
        </ul>

    </div>
</nav>
