<?php 
    include_once('./../layouts/Header.php');
?>

<div class="container">
    <div class="row">
    <div class="col-md-6">
        <h3>Final Method</h3>
        <ul>
            <li>
                PHP 5 introduces the final keyword
            </li>
            <li>
                which prevents child classes from overriding a method by prefixing the definition with final.
            </li>
            <li>
                If the class itself is being defined final then it cannot be extended.
            </li>
        </ul>
    </div>
    <div class="col-md-6 code">
    <?php
        highlight_file('./../code/Final.php');
    ?>
</div>
    </div>
</div>

<?php 
    include_once('./../layouts/Footer.php');
?>
