<?php
if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {

    echo '<h1 class="text-white px-4 py-2 bg-red-500">' . $_SESSION['error'] . '</h1>';
    unset($_SESSION['error']);
}
