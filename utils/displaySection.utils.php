<?php
require_once BASE_PATH . '/utils/displayPets.utils.php';
?>

<?php
function displaySection($categories){
        foreach ($categories as $categoryName => $pets) {
        echo "<section>";
        echo "<h3>" . ucfirst($categoryName) . "</h3>";
        echo '<div class="pets-section">';
        displayPets($pets, $categoryName);
        echo "</div>";
        echo "</section>";
    }
}