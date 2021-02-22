<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('articles.index') }}" class="nav-link">
                <i class="nav-icon far fa-newspaper"></i>
                <p>Статьи</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('categories.index') }}" class="nav-link">
                <i class="nav-icon fas fa-folder"></i>
                <p>Категории</p>
            </a>
        </li>

    </ul>
</nav>
<!-- /.sidebar-menu -->
