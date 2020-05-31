<?php 
    include_once('./../layouts/Header.php');
?>

<div class="container">
    <div class="row">
    <div class="col-md-6">
        <h3> Function Overriding </h3>
        <ul>
            <li>
                PHP class definitions can optionally inherit from a parent class definition by using the extends clause.
            </li>
            
           
        </ul>
    </div>
    <div class="col-md-6 code">
    <?php
        highlight_file('./../code/FunctionOverriding.php');
    ?>
</div>
    </div>
</div>

<?php 
    include_once('./../layouts/Footer.php');
?>
