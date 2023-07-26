<div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: <?= $warna ?>">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('dashboard/home/') ?>">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('dashboard/home/service') ?>">
                            Service
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('dashboard/home/aboutus') ?>">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            Sign Up
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>