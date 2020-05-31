<?php 
    include_once('./../layouts/Header.php');
?>

<div class="container">
    <div class="row">
    <div class="col-md-6">
        <h3> Calling Member Variable </h3>
        <ul>
            <li>
                After creating Class objects, we will be able to call member variable related to that object. 
            </li>
            <li>
                $physics = new Books;   <br>
                $physics->price;        <br>
                $physics->title;        <br>
            </li>
           
        </ul>
    </div>
    <div class="col-md-6 code">
    <?php
        highlight_file('./../code/MemberVariable.php');
    ?>
</div>
    </div>
</div>

<?php 
    include_once('./../layouts/Footer.php');
?>
