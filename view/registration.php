
<?php require_once dirname(__DIR__) . "/include/header.php" ?>


            <div>
                <form action="../controllers/registrationUser.php" method="post" style="width: 300px; margin: auto;">
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" id="formGroupExampleInput2" placeholder="Unesite ime" required style="margin-top: 20px;">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Unesite email adresu" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Unesite lozinku" required>
                    </div>
                    <div>
                        <a href="listFromDb.php"><button type="submit" class="btn btn-primary" style="width: 300px;">Registruj se</button></a>
                    </div>
                    <a href="login.php">Vec imas nalog?</a>
                </form>
            </div>

<?php require_once dirname(__DIR__) . "/include/footer.php"; ?>



