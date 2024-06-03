<?php 
    session_start();
    session_unset();
    echo "
        <script>
            alert('Berhasil Logout');
            window.location = 'login.php';
        </script>
    ";
?>
