<?php

require '../query.php';

if(!empty($_POST)){

    try {
        if (empty($_POST['name']) ||
            empty($_POST['location']) ||
            empty($_POST['date_established']) ||
            empty($_POST['area_in_acres']) ||
            empty($_POST['description'])
        ) {
            throw new Exception('One or more fields are empty. Please enter all fields.');
        } else {

            $input = $dbc->prepare("INSERT INTO national_parks(name, location, date_established, area_in_acres, description)
                                    VALUES(:name, :location, STR_TO_DATE(:date_established, '%m/%d/%Y'), :area_in_acres, :description)");

            $input->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
            $input->bindValue(':location', $_POST['location'], PDO::PARAM_STR);
            $input->bindValue(':date_established', $_POST['date_established'], PDO::PARAM_STR);
            $input->bindValue(':area_in_acres', $_POST['area_in_acres'], PDO::PARAM_STR);
            $input->bindValue(':description', $_POST['description'], PDO::PARAM_STR);

            $input->execute();
        }
    } catch (Exception $e){
        $error = $e->getMessage();
    }
}

?>

 <html>
 <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="js/time/jquery-ui.min.css">
    <style type="text/css">
        table {
            margin-top: 40px;
        }

        button {
            padding: 15px;
            margin-right: 15px;
        }

        input{
             margin-right: 15px;
        }

        #add {
            margin-left: 35px;
        }
    </style>
    <title>National Parks</title>
 </head>

 <body>
    <div class= 'container'>

        <table class="table table-bordered table-striped">
            <tr>
                <th>Park</th>
                <th>Location</th>
                <th>Founded</th>
                <th>Size in Acres</th>
                <th>Description</th>
            </tr>
            <? foreach ($rows as $row): ?>
            <tr>
                <td><?= $row['name']; ?></td>
                <td><?= $row['location']; ?></td>
                <td><?= date('F j, Y', strtotime($row['date_established'])); ?></td>
                <td><?= $row['area_in_acres']; ?></td>
                <td><?= $row['description']; ?></td>
            </tr>
            <? endforeach ?>
        </table>

        <form id='form' role='role' class="form-inline" method="POST" action="national_parks.php">
            <input id="name" name="name" placeholder="Park Name" autofocus>
            <input id="location" name="location"  placeholder="State">
            <input id="date_established" name="date_established" placeholder="Date Established">
            <input id="area_in_acres" name="area_in_acres" placeholder="Area in Acres">
            <input id="description" name="description" placeholder="Describe the Park">


            <button id= "add" class="btn">Add</button>
        </form>

            <?php if(isset($error)):?>
            <h2><?=$error;?></h2>
            <?php endif;?>

        <!--if page is 1 don't display previous-->
        <? if ($pg > 1) :?>

                <a rel='prev' href="?page=<?= $prev; ?>">
                    <button class ="btn">Previous </button>
                </a>

        <? endif; ?>
        <? if ($pg < $last) :?>

                 <a rel='next' href="?page=<?= $next; ?>">
                    <button class ="btn">Next</button>
                </a>

        <? endif; ?>
    </div>


    <!-- Latest compiled and minified JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript"src="js/time/jquery-ui.js"></script>

    <script>
           $(document).ready(

      /* This is the function that will get executed after the DOM is fully loaded */
      function () {
        $("#date_established").datepicker({
            changeYear: true, //this option for allowing user to select from year range
            changeMonth: true,//this option for allowing user to select month
            dateFormat: "mm/dd/yy" // See format options on parseDate
        });
      }
    );
    </script>

 </body>
 </html>
