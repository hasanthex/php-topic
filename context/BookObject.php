<?php 
    include_once('./../layouts/Header.php');
?>

<div class="container">
    <div class="row">
    <div class="col-md-6">
        <h3> Creating Objects in PHP </h3>
        <ul>
            <li>
                Once you defined your class, then you can create as many objects as you like of that class type. Following is an example of how to create object using new operator.
            </li>
            <li>
                $physics = new Books;   <br>
                $maths = new Books; <br>
                $chemistry = new Books; <br>
            </li>
            <li>
                Here we have created three objects and these objects are independent of each other and they will have their existence separately.
            </li>
        </ul>
    </div>
    <div class="col-md-6 code">
    <?php
        highlight_file('./../code/BookObject.php');
    ?>
</div>
    </div>
</div>

<?php 
    include_once('./../layouts/Footer.php');
?>
