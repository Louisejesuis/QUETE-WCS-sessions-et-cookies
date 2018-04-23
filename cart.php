<?php
if ($_SESSION['loginname'] == null ) {
    header('Location:login.php');
    exit();
}
var_dump($_SESSION['loginname']);
require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <h2>Basket :</h2>

            <?php foreach ($_COOKIE['cart'] as $basket):?>
                <ul>
                    <li><img src="assets/img/product-<?= $basket ?>.jpg"></li>
                </ul>
            <?php endforeach; ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
