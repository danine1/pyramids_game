<?php


require_once 'db.php';

$query = "
SELECT
`chapter`.`id` AS `chapter_id`,
`chapter`.`text` AS `chapter_text`,
`choice`.`text` AS `chapter_options`,
`choice`.`goto_id` AS `next_chapter_id`
FROM `chapter`
RIGHT JOIN 
`choice`    
    ON `chapter`.`id`=`choice`.`chapter_id`
WHERE
    `chapter`.`id` = '3'
";


$statement = db::query($query);

$data = $statement->fetchALL();
// var_dump($data);
// die();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

    <title>Secret of the Pyramids</title>

    <style>
        body {
            font-family: 'Amatic SC', cursive;
            font-size: 2em;
        }
        .heading {
            margin-top: 200px;
        }

        #buttons {
            margin-bottom: 200px;
        }
    </style>
</head>


<div id="chapter">
    <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="head2">
                        <img class="img-fluid" src="img/head.jpg" alt="head1">
                    </div>
                </div>
                <div class="col-md-8 text-center">
                    <div class="heading">
                    <h1><strong>Secret of the Pyramids</strong></h1>
                    <h2><strong><?php echo "Chapter " .  ($data[0]['chapter_id']); ?></strong></h2>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="head1">
                        <img class="img-fluid" src="img/head.jpg" alt="head2">
                    </div>
                </div>
            </div>
        </div>
   
    
    </div>


    <div id ="text">
    <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <?php echo ($data[0]['chapter_text']); ?>
                </div>
            </div>
        </div>
    </div>

  

    <div id="buttons">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                <button type="button" class="btn-lg btn-outline-primary"><?php echo ($data[0]['chapter_options']); ?></button>
                <button type="button" class="btn-lg btn-outline-success"><?php echo ($data[1]['chapter_options']); ?></button>
                </div>
            </div>
        </div>

    
    </div>
<body>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    
</body>
</html>