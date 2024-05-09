<header>

    <nav class="navbar navbar-expand-sm border-bottom border-body nav_header">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Movies </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Link</a>
                    </li>

                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Type a movie name" />
                    <button class="btn btn btn-light my-2 my-sm-0" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>


</header>
