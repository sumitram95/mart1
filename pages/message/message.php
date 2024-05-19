<?php
if (isset($_SESSION['message']) && !empty($_SESSION['message'])) {

    echo '<h1 class="text-white px-4 py-2 bg-primary" id="message">' . $_SESSION['message'] . '</h1>';
    unset($_SESSION['message']);
}
