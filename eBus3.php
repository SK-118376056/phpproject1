
    
    
    <!DOCTYPE html>
<html>
    <head>
    <style>
    html {
        background: url(marble.jpg) no-repeat center fixed;
        background-size: cover;
        
    }
body 
h1 {
  color: black;
  text-align: center;
  border-bottom: 3px solid black;
  font-size: 30px;
  font-family: monotype corsiva;
}
a {
  background-color: #e7e7e7; /* Green */
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
   
}
.button5 {background-color: #e7e7e7;}
 

</style>
    </head>
    <body>
        <h1>Skeohane's Service for Consultation</h1>
        <a class="btn" href="index.php" style="border: 3px solid black" >Home-page</a>
        <br>
        <br>
    </body>
</html>
 <!-- starting the session to get the session variablefrom the last page-->
        
        <?php
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullnameValue = $_POST['txtName'];
        echo "The name is : ".$fullnameValue.".";
        echo "<br></br>";
        echo "The total value is : ".$totalValue2.".";
        ?>
        



