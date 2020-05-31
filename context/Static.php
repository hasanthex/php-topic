<?php 
    include_once('./../layouts/Header.php');
?>

<div class="container">
    <div class="row">
    <div class="col-md-6">
        <h3> Static Variable & Methods </h3>
        <ul>
            <li>
                Declaring class members or methods as static makes them accessible 
                without needing an instantiation of the class.
            </li>
            <li>
                A member declared as static can not be accessed with an instantiated 
                class object (though a static method can)
            </li>
           
        </ul>
    </div>
    <div class="col-md-6 code">
    <?php
        highlight_file('./../code/Static.php');
    ?>
</div>
    </div>
</div>

<?php 
    include_once('./../layouts/Footer.php');
?>
