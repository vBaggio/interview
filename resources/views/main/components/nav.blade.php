<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Interview</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if($page == 'home') active @endif" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($page == 'about') active @endif" href="#">Parceiros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($page == 'contact') active @endif" href="#">Sobre Nós</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
