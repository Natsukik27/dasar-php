static_variable.php

<?php

function coba() {
    $a = 0; 
    $a = $a + 1;

    return "Ini adalah pemanggilan ke-$a fungsi coba() <br />";
}

echo coba(); // Output: Ini adalah pemanggilan ke-1 fungsi coba()
echo coba(); // Output: Ini adalah pemanggilan ke-2 fungsi coba()
echo coba(); // Output: Ini adalah pemanggilan ke-3 fungsi coba()
echo coba(); // Output: Ini adalah pemanggilan ke-4 fungsi coba()

?>