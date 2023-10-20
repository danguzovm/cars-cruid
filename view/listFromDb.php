    <?php

        require_once dirname(__DIR__) . "/include/header.php";

        if (! isset($_SESSION['auth_user']['id'])) {
            die("Da biste videli ovu stranicu, morate biti prijavljeni.");
        }

        $result = $db->query("SELECT * FROM cars");

        $cars = $result->fetch_all(MYSQLI_ASSOC);

    ?>

    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li style="color: cornflowerblue;">Dobrodosao <?= $_SESSION['auth_user']['name'] ?> </li>
            </ul>
            <div class="col-md-3 text-end" style="margin-left: 530px">
                <button type="button" class="btn btn-primary"><a href="../index.php" style="color: white;">Pocetna</a></button>
            </div>
        </header>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th class="table-secondary">Automobil</th>
            <th class="table-secondary">Cena</th>
            <th class="table-secondary">Godina proizvodnje</th>
            <th class="table-secondary">Na stanju</th>
            <th class="table-secondary">Detaljnije</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($cars as $car) : ?>
            <tr>
                <td class="table-success"><?= $car['car'] . " " . $car['model'] ?></td>
                <td class="table-success"><?= $car['price'] ?></td>
                <td class="table-success"><?= $car['age'] ?></td>
                <td class="table-success"><?= $car['quantity'] == 0 ? "Nema na stanju" : "Ima na stanju" ?></td>
                <td class="table-success"><a href="product.php?id=<?= $car['id'] ?>">Pogledajte detaljnije</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <?php require_once dirname(__DIR__) . "/include/footer.php"; ?>
