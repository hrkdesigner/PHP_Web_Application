<?php 
session_start();



include("./common/header.php"); 
 ?>

<div class="container">
    <h1>Welcome to HRK Designer PHP Web Application </h1>
    <h4>This is a fully php web application having form validation, and a slight user uthentication along with Interest rate Calculation</h4>

    <br />
   
    <ul>
        <li class="ulii"><?php empty($_SESSION['agreement']) ? print('<a class="link" href="Disclaimer.php">Deposit Calculator</a>') : print('<a class="link" href="DepositeCalculator.php">Deposit Calculator</a>') ?></li>
    </ul>
    
    <br />
   
    <br />
   
    <br />
   <a class="link" href="https://hrkdesigner/github.io">My Portfolio</a>
   <a class="link" href="https://linkedin.com/in/hrkdesigner">My LinkdIn Profile</a>
</div>

<?php include('./common/footer.php'); ?>

</html>