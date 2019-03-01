<!-- Sidebar Scroll Container -->
<div id="sidebar-scroll">
    <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
    <div class="sidebar-content">
        <div class="side-content">
            <ul class="nav-main">
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu">Сервисы</a>
                    <ul>
                        <li><a href="{{ route('admin.services.index') }}">Список</a></li>
                        <li><a href="{{ route('admin.services.create') }}">Добавить</a></li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu">Тарифы</a>
                    <ul>
                        <li><a href="{{ route('admin.tariffs.index') }}">Список</a></li>
                        <li><a href="{{ route('admin.tariffs.create') }}">Добавить</a></li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu">Подборки</a>
                    <ul>
                        <li><a href="{{ route('admin.compilations.index') }}">Список</a></li>
                        <li><a href="{{ route('admin.compilations.create') }}">Добавить</a></li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu">Категории</a>
                    <ul>
                        <li><a href="{{ route('admin.categories.index') }}">Список</a></li>
                        <li><a href="{{ route('admin.categories.create') }}">Добавить</a></li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu">Блог</a>
                    <ul>
                        <li><a href="{{ route('admin.blog.index') }}">Список</a></li>
                        <li><a href="{{ route('admin.blog.create') }}">Добавить</a></li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu">Блог теги</a>
                    <ul>
                        <li><a href="{{ route('admin.tags.index') }}">Список</a></li>
                        <li><a href="{{ route('admin.tags.create') }}">Добавить</a></li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu">Поддержка</a>
                    <ul>
                        <li><a href="{{ route('admin.faqs.index') }}">Список</a></li>
                        <li><a href="{{ route('admin.faqs.create') }}">Добавить</a></li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu">Категории поддержки</a>
                    <ul>
                        <li><a href="{{ route('admin.faq-categories.index') }}">Список</a></li>
                        <li><a href="{{ route('admin.faq-categories.create') }}">Добавить</a></li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu">Страницы</a>
                    <ul>
                        <li><a href="{{ route('admin.pages.index') }}">Список</a></li>
                        <li><a href="{{ route('admin.pages.create') }}">Добавить</a></li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu">Элементы страниц</a>
                    <ul>
                        <li><a href="{{ route('admin.page-elements.index') }}">Список</a></li>
                        <li><a href="{{ route('admin.page-elements.create') }}">Добавить</a></li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu">Меню</a>
                    <ul>
                        <li><a href="{{ route('admin.menus.index') }}">Список</a></li>
                        <li><a href="{{ route('admin.menus.create') }}">Добавить</a></li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu">Меню элементы</a>
                    <ul>
                        <li><a href="{{ route('admin.menu-elements.index') }}">Список</a></li>
                        <li><a href="{{ route('admin.menu-elements.create') }}">Добавить</a></li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu">Общие настройки</a>
                    <ul>
                        <li><a href="{{ route('admin.settings.index') }}">Список</a></li>
                        <li><a href="{{ route('admin.settings.create') }}">Добавить</a></li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu">Фразы</a>
                    <ul>
                        <li><a href="{{ route('admin.phrases.index') }}">Список</a></li>
                        <li><a href="{{ route('admin.phrases.create') }}">Добавить</a></li>
                    </ul>
                </li>

                <a href="/logout">Logout</a>
            </ul>

        </div>
    </div>
</div>