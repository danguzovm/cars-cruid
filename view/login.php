
    <?php require_once dirname(__DIR__) . "/include/header.php" ?>


        <form action="../controllers/loginUser.php" method="post" style="width: 300px; margin: auto; margin-top: 20px;>
            <div class="mb-3">
                <input type="text" name="email" class="form-control"  id="formGroupExampleInput" placeholder="Unesite email adresu">
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Unesite lozinku" style="margin-top: 20px;">
            </div>
            <div>
                <button type="submit" class="btn btn-primary" style="width: 300px; color: white;">Prijavite se</button>
            </div>
        </form>

    <?php require_once dirname(__DIR__) . "/include/footer.php"; ?>
