<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>

<!DOCTYPE html>
<html lang="en" xmlns="http.//www.w3.org/1999/xhtml">
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
    <meta charset="utf-8" />
    <title>Ebusiness 1</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <div class="form">
            <form name="intCalc" method="post" action="eBus2.php">
        <h1>Skeohane's Service for Consultation</h1>
        <a class="btn" href="index.php" style="border: 3px solid black" >Home-page</a>
        <a class="btn" href="consultinghomepage.html" style="border: 3px solid black" >Consulting Home-page</a>
        <hr />
        <center>
                    <table cellspacing="10">
            <tr>
                            <td><b>Select a Consulting Service</b></td>
            </tr>
            <tr>
                            <td>Blockchain @ $1000</td>
                            <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" /></td>
                        </tr>              
            <tr>
                            <td>Autonomous Things @ $2000</td>
                            <td><input type="radio" id="Autonomous" name="rdoGroup" value="2000" /></td>
                        </tr>              
            <tr>
                            <td>Immersive Experience @ $3000</td>
                            <td><input type="radio" id="Immersive" name="rdoGroup" value="3000" /></td>
                        </tr>  
                    </table>
                </center>
    <br />

        <center>
            <table cellspacing="10">
        <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
        </tr>
        <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
        </tr>
        <tr>
                    <td>-Discount @30%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
        </tr>
                <tr>
                    <td>+VAT @40%</td>
                    <td><input type="text" id="txtVat" name="txtVat" readonly /></td>
        </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
                </tr>
            </table>
        </center>
  
    <br />
        <center>
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
                    <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                    <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
        </center>
    </form>
</div>
      
       <script type="text/javascript">
        function calcSub() {
            //Assigning variables to the values
            var subAmount = parseFloat(document.getElementById('txtSubTot').value);
            var Blockchain = parseFloat(document.getElementById('Blockchain').value);
            var Autonomous = parseFloat(document.getElementById('Autonomous').value);
            var Immersive = parseFloat(document.getElementById('Immersive').value);
          
//            If radio buttons are clicked, values are assigned
            if (document.getElementById('Blockchain').checked) {
                document.intCalc.txtSubTot.value = Blockchain;
                subAmount = Blockchain;
                calculation(subAmount);
              
            }
        else if (document.getElementById('Autonomous').checked) {
                document.intCalc.txtSubTot.value = Autonomous;
                subAmount = Autonomous;
                 calculation(subAmount);
             
            }
        else if (document.getElementById('Immersive').checked) {
                document.intCalc.txtSubTot.value = Immersive;
                subAmount = Immersive;
                 calculation(subAmount);
            }
        }  
      
         //Function for calculating the values
        function calculation(parmSTotal){
           var subTotal = parseFloat(parmSTotal);
           var discCalc = parseFloat(subTotal * .30);
           var vatCalc = parseFloat(subTotal * .40);
           var total = parseFloat(subTotal - discCalc + vatCalc);
         
           //Inserting them into the correct fields
           document.intCalc.txtDisc.value = discCalc;
           document.intCalc.txtVat.value = vatCalc;
           document.intCalc.txtTotal.value = total;
        
        }
//    

    </script>
  
    <script>
    function AmountClear(){
        document.getElementById("txtSubTot").value="";
    document.getElementById("txtDisc").value="";
        document.getElementById("txtVat").value="";
    document.getElementById("txtTotal").value="";
}
    </script>
</body>
</html>