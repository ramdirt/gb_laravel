    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('admin.index') }}">
              Главная
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('admin.categories.index')}}">
              Категории
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('admin.news.index')}}">
              Новости
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">
              Загрузки
            </a>
          </li>
          <x-alert type="success" message="success" />
        </ul>
      </div>
    </nav>