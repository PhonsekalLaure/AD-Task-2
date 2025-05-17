<?php
function nav($menu)
{
    ?>
    <nav>
        <?php
            foreach ($menu as $title => $link){
                echo "<li><a href = '$link'>$title</a></li>";
            }
        ?>
    </nav>
    <?php
}
?>