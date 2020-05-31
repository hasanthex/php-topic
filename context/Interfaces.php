<?php 
    include_once('./../layouts/Header.php');
?>

<div class="container">
    <div class="row">
    <div class="col-md-6">
        <h3> Interfaces </h3>
        <ul>
            <li>
                In object-oriented programming, an interface allows you to specify a set of function 
                signatures and hide the implementation of those functions in an "implementing" class. 
            </li>
            <li>
                If a class implements an interface, then all methods defined by that interface must be implemented 
            </li>
            
           
        </ul>
    </div>
    <div class="col-md-6 code">
    <?php
        highlight_file('./../code/Interfaces.php');
    ?>
</div>
    </div>
</div>

<?php 
    include_once('./../layouts/Footer.php');
?>
