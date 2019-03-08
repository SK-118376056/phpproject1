<?php?>

<html lang="en">
    

     <head>
         <html lang="en">


  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Calculator</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">



 
         
         
         
         
         
         
            
<script language ="javascript" type="text/javascript">
                 <!--assigning values to the radio buttons-->
function subTotal() {
 //Enter in Prices Here
 var x = 5;
 var y = 10;
 var p = x + y * 12;
 var b = y * 12;
 
    if (document.getElementById('basicProgram').checked) {
     //Basic package is checked
     document.calculator.total.value = b;
    
        } else if (document.getElementById('proProgram').checked) {
         // Pro package is checked
         document.calculator.total.value = p;
    }
        
 }

<!--Calculations for discount and total-->
function calcDisc(){
var subTot = document.calculator.total.value;
var discTotal = ((subTot /100 *10))
document.calculator.discount.value = discTotal;
}

function calcTotal(){
var subTott = document.calculator.total.value;

var discTotal = document.calculator.discount.value;

var wholeTotal = (subTott - discTotal);

document.calculator.wholeTotal.value = wholeTotal;
}
    </script> 
    </head>

   
     <body>

<header class="masthead d-flex">
      <div class="container text-center my-auto">
        <h1 class="mb-1">Calculator</h1>




              <!-- Opening a HTML form -->
 <section class="content-section bg-light" id='details'>
      <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto"></div>
            
         <form name="calculator">
            
         <!--User fills out form here -->
        
         <br />
         <input type="radio" name="programType" id="basicProgram" value="Basic" /> Basic
         <input type="radio" name="programType" id="proProgram" value="Pro" checked /> Pro 
        
         <!-- Here Results will be displayed -->
        
         <br />
         Subtotal: <input type="text" name="total">
         <br>
         <input type="button" value="Subtotal" onclick="javascript:subTotal();">
         </br>
        
         Discount: <input type="text" name="discount">
         <br>
         <input type="button" value="Discount" onclick="javascript:calcDisc();">
         </br>
        
         Total: <input type="text" name="wholeTotal">
         <br>
         <input type="button" value="Total" onclick="javascript:calcTotal();">
        
        
         </form>




     </body>

</html>