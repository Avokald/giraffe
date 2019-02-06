<!-- Sidebar Scroll Container -->
<div id="sidebar-scroll">
    <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
    <div class="sidebar-content">
        <div class="side-content">
            <ul class="nav-main">
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu">Сервисы</a>
                    <ul>
                        <li><a href="{{ route('admin.services.index') }}">Все</a></li>
                        <li><a href="{{ route('admin.services.create') }}">Создать</a></li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu">Подборки</a>
                    <ul>
                        <li><a href="{{ route('admin.compilations.index') }}">Все</a></li>
                        <li><a href="{{ route('admin.compilations.create') }}">Создать</a></li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu">Категории</a>
                    <ul>
                        <li><a href="{{ route('admin.categories.index') }}">Все</a></li>
                        <li><a href="{{ route('admin.categories.create') }}">Создать</a></li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu">Блог</a>
                    <ul>
                        <li><a href="{{ route('admin.blog.index') }}">Все</a></li>
                        <li><a href="{{ route('admin.blog.create') }}">Создать</a></li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu">Страницы</a>
                    <ul>
                        <li><a href="{{ route('admin.pages.index') }}">Все</a></li>
                        <li><a href="{{ route('admin.pages.create') }}">Создать</a></li>
                    </ul>
                </li>

                <a>Logout</a>
            </ul>

        </div>
    </div>
</div>