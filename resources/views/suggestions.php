<?php
foreach ($suggestions as $suggestion){
    echo "<p>$suggestion->name </p>";
    echo "<p>$suggestion->subject </p>";
    echo "<p>$suggestion->email </p>";
    echo "<p>$suggestion->message </p>";
}
?>
