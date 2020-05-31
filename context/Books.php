<?php 
    include_once('./../layouts/Header.php');
?>

<div class="container">
    <div class="row">
    <div class="col-md-6">
        <h3>Defining PHP Classes</h3>
        <ul>
            <li>
                The variable $this is a special variable and it refers to the same object ie. itself.
            </li>
        </ul>
    </div>
    <div class="col-md-6 code">
    <?php
        highlight_file('./../code/Books.php');
    ?>
</div>
    </div>
</div>

<?php 
    include_once('./../layouts/Footer.php');
?>
