<!--Template header was re-used in add_to_do.php-->
<?php
global $title;
$title = "Parlsey's To-Do List";
include 'templates/header.php';
?>
<!--End of the template header being used-->

<!--Storing Active To-Dos in a list and into an array-->
<?php $activeToDoList = array(); ?>


<!--This file only take inputs from user and output to storage-->
<form action="add_to_do.php" method="POST">
    <label for="add_to_do">
        Enter a new task: 
        <input type="text" id="add_to_do" name="add_to_do">
        <?php array_push($activeToDoList, $_POST["add_to_do"])?>
    </label>
    <input type="submit" value="Add Task">
    <input type="reset"  value="Reset To-Do List">
</form>

<h2>Parsley's Active To-Dos</h2>

    <input type="checkbox" id="todo" name="todo">
    <label>[to be added with stored data]</label>

<!--To Debug and also to check whether my $_POST is storing any user input-->
<h2>Debugger</h2>
<?php
    echo '<pre>';
    var_dump($activeToDoList);
    echo '</pre>'
?>