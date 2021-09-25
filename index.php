<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h1>Sign up</h1>
      <form id="frm" method="post" >
        <div class="form__container">
          <div class="name">
            <input
              type="text"
              id="fn" 
              name="fn"
              placeholder="First name"
              class="halfwidth"
            />
            <input
              type="text"
              id="ln"
              name="ln"
              class="halfwidth"
              placeholder="Last Name"
            />
          </div>

          <div class="number">
            <input
              type="text"
              id="phone"
              name="phone"
              placeholder="Mobile number"
              class="fullwidth"
            />
          </div>
          <div class="mail">
            <input type="email" placeholder="email address" name="email" class="fullwidth" />
          </div>
          <div class="pass">
            <input
              type="password"
              id="pass"
              name="pass"
              placeholder="New password"
              class="fullwidth"
            />
          </div>
          <div class="dob">
            <label for="dob"><h3>Date of birth:</h3> </label>
            <input type="date" name="dob" class="fullwidth" id="dob" />
          </div>
          <div class="gender" id="gender" name="gender">
            <label for="gender"><h3>Gender:</h3></label>
            <input type="radio" name="gender" value="female" id="female" />

            <label for="female">Female</label> <br />
            <input type="radio" name="gender" value="male" id="male" />
            <label for="male">Male</label> <br />
          </div>
          <div class="termsandcond">
            <br />
            <input type="checkbox" id="accept_terms_and_conditions" />
            <label for="accept_terms_and_conditions">
              By clicking Sign Up, you agree to our Terms & Conditions.
            </label>
          </div>
          <br />
          <div class="submit">
            <button id="sub" class="submit-btn" >Sign Up </button>
          </div>
        </div>
      </form>
    </div>

    <script>
      $(document).ready(function(){
        $("#sub").click(function(){
          $.ajax({
              url:"upload.php",
              type:"post",
              data:$("#frm").serialize(),
              success: function(d){
                alert("SIGNUP SUCCESSFULL!");
          
                $("#frm")[0].reset();
              }
          });
        })
      });
    </script>
   
  </body>
</html>
