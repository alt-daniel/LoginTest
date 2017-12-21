<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 20-12-2017
 * Time: 16:33
 */
  include_once "header.php";
?>

<section class="main-container">
    <div class="main-wrapper">
        <h2>Account</h2>

        <?php

        if (isset($_SESSION['u_id'])) {
            echo '<table>
        <caption>Details</caption>
        <tr>
            <th>Voornaam</th>
            <th>' . $_SESSION['u_first'] . '</th>
        </tr>
    
        <tr>
            <th>Achternaam</th>
            <th>' . $_SESSION['u_last'] . '</th>
        </tr>';

            if ($_SESSION['u_phone'] == null) {
                echo '<tr>
                <th>Telefoon</th>
                <th>Onbekend</th>
                    </tr>';
            } else {
                echo '<tr>
                <th>Telefoon</th>
                <th>' . $_SESSION['u_phone'] . '</th>
                    </tr>';
            }
            if ($_SESSION['u_gender'] == null) {
                echo '<tr>
                <th>Geslacht</th>
                <th>Onbekend</th>
                    </tr>';
            } else {
                echo '<tr>
                <th>Geslacht</th>
                <th>' . $_SESSION['u_gender'] . '</th>
                    </tr>';
            }
            echo ' <tr> 
                            <th>Email</th>
                            <th>' . $_SESSION['u_email'] . '</th>
                   </tr>';
            if ($_SESSION['dob'] = null){
                echo '<tr>
                <th>Geslacht</th>
                <th>Onbekend</th>
                    </tr>';
            } else{
                echo '<tr>
                <th>Geslacht</th>
                <th>' . $_SESSION['u_dob'] . '</th>
                    </tr>';
            }
            echo '</table>';
        }

        ?>


    </div>
</section>

<?php
    include_once "footer.php";
?>
