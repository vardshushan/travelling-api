<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link {{active_link_admin('admin.dashboard')}}" href="{{route('admin.dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{active_link_admin('admin.blog.open')}}" href="{{route('admin.blog.open')}}">
                <i class="bi bi-list-stars"></i>
                <span>Blog</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{active_link_admin('admin.partner.open')}}" href="{{route('admin.partner.open')}}">
                <i class="bi bi-people"></i>
                <span>Partner</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{active_link_admin('admin.content.open')}}" href="{{route('admin.content.open')}}">
                <i class="bi bi-body-text"></i>
                <span>Content Management</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#"
               aria-expanded="false">
                <i class="bi bi-card-checklist"></i>
                </i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav" style="">
                <a class="nav-link {{active_link_admin('admin.reports.flights')}}" href="{{route('admin.reports.flights')}}">
                    <i class="bi bi-circle-fill"></i>
                    <span>Flight Reports</span>
                </a>
                <a class="nav-link {{active_link_admin('admin.reports.hotels')}}" href="{{route('admin.reports.hotels')}}">
                    <i class="bi bi-circle-fill"></i>
                    <span>Hotel Reports</span>
                </a>
{{--                <a class="nav-link {{active_link_admin('admin.reports.open')}}" href="{{route('admin.reports.open')}}">--}}
{{--                    <i class="bi bi-circle-fill"></i>--}}
{{--                    <span>Hotel Reports</span>--}}
{{--                </a>--}}
            </ul>
        </li>
    </ul>

</aside>
