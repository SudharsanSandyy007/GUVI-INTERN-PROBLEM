<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="login.css" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  </head>
  <body>
    <div class="container">
      <center>
        <form id="frm" method="post" action="">
          <div class="login__container">
            <h1>Log In</h1>
            <div class="id">
              <input
                type="text"
                id="id"
                name="id"
                placeholder="Enter email address or phonenumber"
              />
            </div>

            <div class="pass">
              <input type="text" name="pass" id="pass" placeholder="Password" />
            </div>

            <div class="btns">
              <button  id="login" class="login" name="login"> Log In </button> <br />
              <a href="./index.php" style="text-decoration:none">
              <input type="button" class="signup" value="Create New Account" />
              </a>
              
            </div>
          </div>
        </form>
      </center>
    </div>
    
<script type="text/javascript">


$(document).ready(function(){
        $("#login").click(function(){
          $.ajax({
              url:"./check_credentials.php",
              type:"post",
              data:$("#frm").serialize(),
              success: function(d){
                alert("LOGIN SUCCESSFULL!");
                $("#frm")[0].reset();
              }
          });
        })
      });

</script>
  </body>
</html>
