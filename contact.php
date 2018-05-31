<!-- 
Assignment Name: Portfolio
File Name: contact.php
Date: 5.15.18
Programmer: Alexandra Nitsche
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--basic style sheets for all pages -->
    <link rel="stylesheet" href="style.css">
    <title>Email Me</title>
</head>

<body>
     <!--/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon*/-->
    
    <script> function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
 </script>
    <!-- header Include-->
<?php include('includes/header.php'); ?>

    <!-- Navigation Include-->
<?php include('includes/nav.php'); ?>    
    
    <h2>Email Me</h2>
    <form action="thankyou.php" method="POST">
        Name: <input type="text" name="name" required>
        <br><br> Email: <input type="text" name="email" required><br><br> Message:

        <br><textarea input type="text" name="comment" rows="5" cols="40"> </textarea>
        <br><br>
        <input type="submit" name="submit" value="Send Email"><br>
    </form>
        
<!-- Footer Include-->
<?php include('includes/footer.php'); ?>  
</body>

</html>
