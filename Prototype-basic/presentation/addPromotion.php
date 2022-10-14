<?php

require_once '../data-access/promotionDAL.php';
$promotionDAL = new PromotionDAL();

if (!empty($_POST)) {
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
        <form action="" method="POST">
            <div class="form-group">
                <label> Promotion Name</label>
                <input type="text" name="name" placeholder="Your Promotion Name ?" class="form-control">
            </div>
            <div class="form-group text-center">

                <button type="text" class="btn btn-primary">submit</button>
            </div>
        </form>
        



    </div>


</body>

</html>