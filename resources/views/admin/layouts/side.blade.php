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
    </ul>

</aside>
