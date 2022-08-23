<?php 
$scope1=$_POST['scope'];
$level1=$_POST['level'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lentelė</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <style>
        body{
            font-family: Tahoma,Verdana,Segoe,sans-serif; 

        }
        table tr td{
            width: 35px;
            height: 35px;
            text-align: center;
            vertical-align: middle;
            font-size: 18px;
            background-color: burlywood;
        }

        table tr td.header{
            background-color: #aaa;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="d-flex justify-content-center mt-4 mb-4">
                    <h1>Multiplication Table</h1>
                </div>
                <hr>
                <div class="d-flex justify-content-center pt-4">
                    <table class="table-bordered ">
                        <?php
                         for ($k=1; $k<=$scope1; $k++){ ?>
                          <td class="header"><?=$k?></td>
                        <?php } ?>
                        <?php
                         for ($i=2; $i<=$scope1; $i++) { ?>
                        <tr>  
                            <?php for ($y=1; $y<=$scope1; $y++) { ?>
                            <td class="<?=($y==1)?'header':''?>"> <?=(rand(0,100)<$level1 && ($y!=1))?'':$i*$y ?> </td>
                            <!--if (rand(0,100)< 50)  pasiima 50% -->
                            <?php } ?>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="float-end mt-3">
                    <a href="generator.php"> Atgal </a>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>

</html>