<!DOCTYPE html>
<html lang="en">

<?php
$url = "data.json";
$json = file_get_contents($url);
$data = json_decode($json, TRUE);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8454c42fcb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Pelatihan</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <?php
            $i = 0;
            foreach ($data as $key => $value) {
            ?>
                <div class="col-md-4">
                    <div class="card m-1">
                        <img src="<?=$value['cover'] ?>" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?= $value['product_name'] ?></h5>
                            <p class="card-text"><?= $value['description'] ?></p>
                        </div>
                        <div class="card-footer bg-white">
                            <?php
                            if ($i % 2 == 1) {
                            ?>
                                <div class="px-2 row">
                                    <a class="text-left" href="#">Sponsored Ad</a>
                                    <div class="ml-auto text-right">
                                        <?= $value['likes'] ?>
                                        <i class="far fa-heart"></i>
                                        <i class="fas fa-tags"></i>
                                        <i class="fas fa-share-alt"></i>
                                    </div>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="px-2 row">
                                    <!-- <a class="text-left" href="#">Sponsored Ad</a> -->
                                    <div class="ml-auto text-right">
                                        <?= $value['likes'] ?>
                                        <i class="far fa-heart"></i>
                                        <img src="tags.png" alt="" height="20" width="20">
                                        <i class="fas fa-share-alt"></i>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php
                $i++;
            }
            ?>

        </div>
    </div>
</body>

</html>