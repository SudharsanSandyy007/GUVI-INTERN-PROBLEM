<?php
session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "guvi";
    
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    $results = $conn->query("SELECT * FROM signup");

    $id= $_SESSION["id"];
    $pwd = $_SESSION["pwd"];
?>




<?php while($data = $results->fetch_assoc() ): ?>
    
  <?php if(( $id == $data['email']  || $id ==  $data["mobile"]) && ($pwd == $data['pwd'])): ?>
    <center>
        <form action="">
          <div class="login__container">
            <h1>P R O F I L E</h1>
            <div class="id">
              <input
                type="text"
                placeholder="Enter email address or phonenumber" id="email"
                value="<?php echo $data['email'] ?>"
              />
            </div>

            <div class="pass">
              <input type="text" placeholder="Password" value="<?php echo $data['pwd'] ?>" />
            </div>

            <div class="others">
              <input type="number" placeholder="Age" /> <br />
              <input type="date" placeholder="DOB" value="<?php echo $data['dob'] ?>" /> <br />
              <input type="number" placeholder="CONTACT NUMBER" value="<?php echo $data['mobile'] ?>" /> <br />
              <input type="text" placeholder="ADDRESS" /> <br />
            </div>

            <div class="btns">
              <input type="submit" value="UPDATE" class="login" /> <br />
              <input type="button" class="signup" value="CANCEL" />
            </div>
          </div>
        </form>


      </center>
    <?php endif;?>
<?php endwhile;?>
  