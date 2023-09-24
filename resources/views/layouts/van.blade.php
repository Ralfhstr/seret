
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="col-7 navbar-brand" href="#">
            <img src="{{ asset('storage/images/Logo.png') }}" alt="" style="width: 20%; margin: 1%; margin-left:100px">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin: 1%; margin-right: 50px;">
            <div class="navbar-nav">
                <a class="nav-item nav-link px-4" href="{{ route('products.index') }}">Home</a>
                <a class="nav-item nav-link px-4" href="{{ route('products.about') }}">Tentang Kami</a>
                <a class="nav-item nav-link px-4" href="{{ route('products.create') }}">Beli Sekarang</a>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-danger" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <i class="bi bi-lock"></i>{{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </div>
        </div>
    </div>
</nav>
