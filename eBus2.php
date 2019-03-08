<?php

session_start();
$fullNameValue = "";
$totalValue = "";

//Create a session variable for the mobile number

$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION ['txtTotal'] = $totalValue;

//Allocate the mobile session variable to a text box

?>

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
table {
    color: black;
    font-size: 18px;
    font-family: times new roman;
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
        <title>eBusiness 2</title>
    </head>
    <body>
        <h1>Skeohane's Service for Consultation</h1>
        <a class="btn" href="index.php" style="border: 3px solid black" >Home-page</a>
        <a class="btn" href="consultinghomepage.html" style="border: 3px solid black" >Consulting Home-page</a>
        <div class="form">
            <form name="Details" method="post" action="eBus3.php">
                  <center>
                      <table cellspacing="10">
                          <tr>
                              <td><b></b></td>
                              <td><b>Enter in your details below</b></td>
                          </tr>
                          <tr>
                              <td>Name</td>
                              <td><input type="text" id="txtName" name="txtName" value="" /></td>
                          </tr>
                          <tr>
                              <td>Phone Number</td>
                              <td><input type="text" id="txtNum" name="txtNum" value="" /></td>
                          </tr>
                          <tr>
                              <td>Password</td>
                              <td><input type="text" id="txtPassword" name="txtPassword" value="" /></td>
                          </tr>
                          <tr>
                              <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>  
                          </tr>
                          
                      </table>
                </center>
                
<center>

<input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue" />
    </center>
        </div>
        </form>
    </body>
    </html>
        

