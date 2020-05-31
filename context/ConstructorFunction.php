<?php 
    include_once('./../layouts/Header.php');
?>

<div class="container">
    <div class="row">
    <div class="col-md-6">
        <h3> Constructor Function </h3>
        <ul>
            <li>
                Constructor Functions are special type of functions which 
                are called automatically whenever an object is created.
            </li>
            <li>
                PHP provides a special function called __construct() to define a constructor. 
            </li>
            <li>
                You can pass as many as arguments you like into the constructor function.
            </li>
           
        </ul>
    </div>
    <div class="col-md-6 code">
    <?php
        highlight_file('./../code/ConstructorFunction.php');
    ?>
</div>
    </div>
</div>

<?php 
    include_once('./../layouts/Footer.php');
?>
