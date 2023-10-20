
    <?php require_once dirname(__DIR__) . "/include/header.php"; ?>


        <form action="../controllers/addProductUser.php" method="post" style="width: 300px; margin: auto; margin-top: 20px;>
            <div class=" mb-3">
                <input type="text" name="car" class="form-control"  id="formGroupExampleInput" placeholder="Unesite ime automobila" required style="width: 400px; margin-top: 40px;">
            </div>
            <div class="mb-3">
                <input type="text" name="model" class="form-control"  id="formGroupExampleInput" placeholder="Unesite model automobila" required style="width: 400px; margin-top: 18px;">
            </div>
            <div class="mb-3">
                <input type="number" name="price" class="form-control"  id="formGroupExampleInput" placeholder="Unestite cenu automobila" required style="width: 400px;">
            </div>
            <div class="mb-3">
                <input type="number" name="age" class="form-control"  id="formGroupExampleInput" placeholder="Unesite godinu automobila" required style="width: 400px;">
            </div>
            <div class="mb-3">
                <input type="number" name="quantity" class="form-control"  id="formGroupExampleInput" placeholder="Unesite kolicinu" required style="width: 400px;">
            </div>
            <div>
                <button type="submit" class="btn btn-primary" style="width: 400px;">Dodaj automobil</button>
            </div>
        </form>

    <?php require_once dirname(__DIR__) . "/include/footer.php"; ?>
