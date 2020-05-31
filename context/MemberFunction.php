<?php 
    include_once('./../layouts/Header.php');
?>

<div class="container">
    <div class="row">
    <div class="col-md-6">
        <h3> Calling Member Function </h3>
        <ul>
            <li>
                After creating Class objects, we will be able to call member 
                function related to that object. 
            </li>
            <li>
                $physics = new Books;     <br>
                $physics->setPrice(100);  <br>
                $physics->getPrice();     <br>
            </li>
           
        </ul>
    </div>
    <div class="col-md-6 code">
    <?php
        highlight_file('./../code/MemberFunction.php');
    ?>
</div>
    </div>
</div>

<?php 
    include_once('./../layouts/Footer.php');
?>
