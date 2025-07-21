<nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(to right, #6366f1, #9333ea); padding: 1rem 20px;">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-white" href="#">Livewire CRUD</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="btn p-2 px-3 d-flex align-items-center justify-content-center"
                    style="background-color: white; color: #6366f1; border-radius: 20px;" href="#">
                        Logout
                    </a>
                </li>
                {{-- Commented circular logout button with white bg and purple icon --}}
                {{--
                <li class="nav-item ms-3">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn rounded-circle p-2 d-flex align-items-center justify-content-center"
                            style="width: 40px; height: 40px; background-color: white; color: #6366f1;" title="Logout">
                            <i class="bi bi-box-arrow-right"></i>
                        </button>
                    </form>
                </li>
                --}}
            </ul>
        </div>
    </div>
</nav>
