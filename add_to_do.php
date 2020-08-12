<!--Template header was re-used in add_to_do.php-->
<?php
global $title;
$title = "Parlsey's To-Do List";
include 'templates/header.php';
?>
<!--End of the template header being used-->

<!--This file only take inputs from user and output to storage-->
<form action="add_to_do.php" method="POST">
    <label for="add_to_do">
        Enter a new task: 
        <input type="text" id="add_to_do" name="add_to_do">
    </label>
    <input type="submit" value="Add Task">
    <input type="reset"  value="Reset To-Do List">
</form>

<h2>Debugger</h2>

<!--To Debug and also to check whether my $_POST is storing any user input-->
<?php
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>'
?>