<!--session_start() at the top for us to access any values stored in this user's session-->
<?php session_start();
//Template header was re-used in add_to_do.php

global $title;
$title = "Parlsey's To-Do List";
include 'templates/header.php';
include 'todo_history.php';
?>
<!--End of the template header being used-->

<!--To stop arrays to reset at every request -->
<!--@link: https://stackoverflow.com/questions/24342204/php-session-only-store-the-last-variable-->
<?php 
if(!isset($_SESSION['task-history'])){
    $_SESSION['task-history'] = array();
}?>


<!--This file only take inputs from user and output to storage-->
<form action="add_to_do.php" method="POST">
    <label for="add_to_do">
        Enter a new task: 
        <input type="text" id="add_to_do" name="add_to_do">

            <!--To push input from the user to $activeToDoList-->
            <?php array_push($_SESSION['task-history'], $_POST['add_to_do'])?>

    </label>
    <input type="submit" value="Add Task">
    <input type="reset"  value="Reset To-Do List">
</form>

<!--To output the ActiveToDos in a list-->
    <h2>Parsley's Active To-Dos</h2>
    
    <label><?php activeToDoList();?></label>

<!--To Debug and also to check whether my $_POST is storing any user input-->
<h2>Debugger</h2>
<?php
    echo '<pre>';
    var_dump($_SESSION['task-history']);
    echo '</pre>'
?>