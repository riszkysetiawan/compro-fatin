<nav class="navbar navbar-expand-lg" aria-label="Thirteenth navbar example" style="background-color: #FAEA4F">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
            aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
            <a class="navbar-brand col-lg-3 me-0" href="#"><img src="{{ asset('navbar/logo.png') }}"
                    alt=""></a>
            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                <li class="nav-item">
                    <a class="nav-link " href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about-us">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/portofolio-us">Portofolio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Services</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-lg-flex col-lg-3 justify-content-lg-end ">
                <a class="btn rounded-pill text-white" style="background-color: #C24914" href="/contact">Contact Us</a>
            </div>
        </div>
    </div>
</nav>
