    <?php

        require_once __DIR__ . '/include/header.php';
     ?>
                        <!-- header -->

    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>
            </div>
                        <!-- navbar -->
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

                <li style="color: cornflowerblue;">Dobrodosli</li>
            </ul>
            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-primary" ><a href="view/login.php" style="color: white;">Prijavi se</a></button>
                <button type="button" class="btn btn-primary"><a href="view/registration.php" style="color: white;">Registruj se</a></button>
            </div>

        </header>
    </div>

        <!-- content -->

    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Salon automobila</h1>
                    <p class="lead text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        <a href="#" class="btn btn-primary my-2">Klikni da bi se prikazao broj</a>
                        <a href="#" class="btn btn-success my-2">Klikni da posaljes poruku</a>
                    </p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-body-tertiary">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="img/ford-fiesta-ends-production-lead.webp" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Ford Fiesta</text></img>
                            <div class="card-body">
                                <p class="card-text">Mali, lagan, kompaktan. Staje i u dzep.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Pogledaj</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Izmeni</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="img/s90-exterior-front-view.webp" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Volvo s90</text></img>
                            <div class="card-body">
                                <p class="card-text">Ne cuje se, a radi.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Pogledaj</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Izmeni</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="img/land-rover-defender-110-suv-diesel-c09571c05935.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Land Rover Defender w105</text></img>
                            <div class="card-body">
                                <p class="card-text">Moze i na mesec.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Pogledaj</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Izmeni</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>

    <?php
        require_once __DIR__ . "/include/footer.php";

    ?>