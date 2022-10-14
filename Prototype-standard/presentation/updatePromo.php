<?php
require_once "../business/classManager.php";

$promotionBAL = new Promomanager();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $promotion = $promotionBAL->getPromotionById($id);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];

    $promotionBAL->updatePromotion($id, $name);

    header('location: addPromotion.php?msg=ups');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Promotions</title>
    <link rel="stylesheet" href="../presentation/app2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>

<body>
    <div class="container" id="containerUpdate">
        <div>
        <h2 class="text-center text-info"> Update Promotion: </h2>
            <form method="POST">
                <div class="form-group ">
                    <input type="hidden" id='id' name='id' value=<?php echo $promotion->getId() ?>>
                    <div>
                        <label for="inputFirstName" class="tex-center text-info">Promotion Name: </label>
                        <input  type="text" required value=<?= $promotion->getName() ?> name="name" placeholder="promotion name">
                    </div>
                </div>
                    <div>
                        <button  class="btn btn-primary" type="submit" name="update" value="update">Envoyer</button>
                    </div>
            </form>
        </div>
    </div>
</body>

</html>