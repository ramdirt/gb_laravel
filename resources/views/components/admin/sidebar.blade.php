    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('admin.index') }}">
                        Главная
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('admin.categories.index') }}">
                        Категории
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('admin.news.index') }}">
                        Новости
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('admin.resources.index') }}">
                        Источники парсинга
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('admin.order.index') }}">
                        Запросы на получение данных
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('admin.feedback.index') }}">
                        Обратная связь
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('admin.users.index') }}">
                        Пользователи
                    </a>
                </li>

                <x-alert />
            </ul>
        </div>
    </nav>
