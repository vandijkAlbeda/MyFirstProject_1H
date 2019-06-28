
<!DOCTYPE html>
<html>
    <head>
        <title>MyFirstproject</title> 
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="post" action="http://localhost/MyFirstProject_1H/controllers/controller.php">
            <label> Voer een tekst in <br /></label>          
            <input type = "text" name ="naam" >             
            <input type ="submit" name="submit" value="Submit"/>
        </form>
    </p>
        <?php
            echo $viewData['palindroom']."<br />";
            echo $viewData['message']."<br />";
            echo $viewData['action'];
        ?>
    </body>
</html>

