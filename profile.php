<?php

session_start();
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PROFILE</title>
    <link rel="stylesheet" href="profile.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="container" id="output">
      
    </div>
  </body>

  <script>
    $(document).ready(function(){

      
      $.ajax({
        type: "GET",
        url: "fetch.php",
        dataType: "html",
        success: function(data){
          location.href = "./profile.php";
        }
      });

    });
  </script>
</html>
