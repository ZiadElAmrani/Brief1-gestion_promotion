<?php

require_once '../data-access/promotionDAL.php';
require_once '../business/classManager.php';
require_once '../presentation/deletePromo.php';






if (!empty($_POST)) {
    $promotionDAL = new PromotionDAL();


    $promotionManager1 = new Promomanager();
    $data = $promotionManager1->displayPromotions();
    $promotion = new Promotion();
    $promotion->setName($_POST['name']);
    $promotionDAL->addPromotion($promotion);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Promotion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../presentation/app.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <header>
        <h2 class="text-center text-info">Crud Operation in php OOP</h2>
    </header>
    <div class="container">
        <form action="addPromotion.php" method="POST">
            <div class="form-group">
                <label> Promotion Name</label>
                <input id="input" type="text" name="name" placeholder="Your Promotion Name ?" class="form-control">
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary">submit</button>
            </div>
        </form>
        <input id="search" type="text" placeholder="Search..">
        <table id="tbody" class=" data_div table table-boredered ">
            <tr>
                <th scope="col">sno </th>
                <th scope="col">promotion name</th>
                <th scope="col" colspan="2">Action</th>
            </tr>

            <?php
            $promotionDAL = new PromotionDAL();


            $promotionManager1 = new Promomanager();
            $data = $promotionManager1->displayPromotions();

            foreach ($data as $promotion) {
            ?>

                <tr>
                    <td scope="row"><?= $promotion->getId(); ?></td>
                    <td><?= $promotion->getName(); ?></td>
                    <td>
                        <button class="btn btn-danger"><a id="linkdelete" href="addPromotion.php?id=<?php echo $promotion->getId() ?> ">Supprimer</a></button>
                    </td>
                    <td>
                        <button class="btn btn-primary"><a class="text-light" href="updatePromo.php?id=<?php echo $promotion->getId() ?>">Modifier</a></button>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <script src="app.js"></script>

</body>

</html>