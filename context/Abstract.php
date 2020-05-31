<?php 
    include_once('./../layouts/Header.php');
?>

<div class="container">
    <div class="row">
    <div class="col-md-6">
        <h3> Abstract Classes</h3>
        <ul>
            <li>
                Abstract classes and methods are when the parent class has a named method, 
                but need its child class(es) to fill out the tasks.
            </li>
            <li>
                An abstract class is a class that contains at least one abstract method. 
            </li>
            <li>
                An abstract method is a method that is declared, but not implemented in the code.
            </li>
            <li>
                The child class method must be defined with the same name and it redeclares the parent abstract method
            </li>
            <li>
                The child class method must be defined with the same or a less restricted access modifier
            </li>
            <li>
                The number of required arguments must be the same. However, the child class may have optional arguments in addition
            </li>
        </ul>
    </div>
    <div class="col-md-6 code">
    <?php
        highlight_file('./../code/Abstract.php');
    ?>
</div>
    </div>
</div>

<?php 
    include_once('./../layouts/Footer.php');
?>
