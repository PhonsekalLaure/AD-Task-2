<?php
function nav($menu)
{
    ?>
    <header>
        <?php
            foreach ($menu as $title => $link){
                echo "<li><a href = '$link'>$title</a></li>";
            }
        ?>
    </header>
    <?php
}
?>