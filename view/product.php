<?php
     require_once dirname(__DIR__) . "/include/header.php";

    if(!isset($_GET['id']) || empty($_GET['id'])) {
        die("Missing car ID");
    }

    require_once "include/conn.php";

    $carId = $_GET['id'];

    $result = $db->query("SELECT * FROM cars WHERE id = '$carId'");

    if($result->num_rows == 0) {
        echo "ovaj podatak ne postoji";
    }

    $car = $result->fetch_assoc();
    ?>

            <div class="card" style="width: 18rem; margin-top: 300px; margin-left: 800px;">
                <img src="" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center;"><?= $car['car']. " " .$car['model'] ?></h5>
                    <p class="card-text" style="text-align: center;">Cena automobila: <?= $car['price'] ?></p>
                    <p class="card-text" style="text-align: center;">Godina proizvodnje: <?= $car['age'] ?></p>
                    <p class="card-text" style="text-align: center;">Na stanju: <?= $car['quantity'] ?></p>

                    <?php if($car['quantity'] == 0) : ?>
                        <h4 style="text-align: center;">Nema na stanju</h4>
                    <?php else : ?>
                        <h4 style="text-align: center;">Ima na stanju</h4>
                    <?php endif; ?>

                    <a href="listFromDb.php" class="btn btn-primary">Vrati se na prethodnu stranicu</a>
                </div>
            </div>

<?php require_once dirname(__DIR__) . "/include/footer.php"; ?>

