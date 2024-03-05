<form id="form" action="index.php" method="POST">
       Name: <input type="text" name="name" value=""><br>
       E-mail: <input type="text" name="email"><br>
       <input type="submit">
   </form>
   <?php
   if ($_SERVER['REQUEST_METHOD'] == "POST") { ?>
       Welcome
       <?php echo $_POST["name"]; ?><br>
       Your email address is:
       <?php echo $_POST["email"]; ?>
   <?php } else {
       echo "Cubre el formulario";
   }
   ?>