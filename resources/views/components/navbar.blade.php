<nav class="navbar navbar-expand-lg bg-light p-0 w-100">
    <div class="container-fluid bg-black costum-border ">
        <a class="navbar-brand text-light" href="#"> DAGG Project</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href=" {{ route('serietv') }} ">Serie TV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('chisiamo') }}">Chi siamo</a>
                </li>
            </ul>
        </div>
    </div>
</nav>