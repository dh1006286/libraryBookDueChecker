<!-- Diego Haro -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <section class="container-lg">
        <?php
            // get the form from the form file
            include "form.php";
            //Checks if form was submitted
            if($_GET)
            {   
                //Get the return and due date form GET
                $rDate = $_GET["ReturnDate"];
                $dDate = $_GET["DueDate"];
                //get the functions from the functions file
                include "functions.php"; 
                //determine  and call the book status
                $bookStatus = ReturnStatus($rDate, $dDate);
                echo("<p>$bookStatus</p>");

                 //Convert return and due date string to timestamp then format as m/d/Y
                $rTimeStamp = strtotime($rDate);
                $rDate = date('m/d/Y', $rTimeStamp);
                $dTimeStamp = strtotime($dDate);
                $dDate = date('m/d/Y', $dTimeStamp);
                echo("<p>Return Date: ${rDate} Due Date: ${dDate}</p>");
            }
        ?>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </section>
</body>
</html>