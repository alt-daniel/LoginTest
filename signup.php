<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 20-12-2017
 * Time: 14:49
 */
    include_once 'header.php';
?>

<section class="main-container">
    <div class="main-wrapper">
        <h2>Sign up</h2>
        <form class="signup-form" action="includes/signup.inc.php" method="post">
            <input type="text" name="first" placeholder="Voornaam">
            <input type="text" name="last" placeholder="Achternaam">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Sign up</button>
        </form>
    </div>
</section>

<?php
    include_once 'footer.php';
?>

