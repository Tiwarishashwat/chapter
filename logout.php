<?php
                if(isset($_SESSION['user']))
                {
                unset($_SESSION['user']);
                }
                echo '<script>';
                echo 'alert("You have been successfully logout")';
                echo '</script>';
                header("Location:/web/login.php");
?>