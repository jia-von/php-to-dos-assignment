<!--To store the global $title as PHP-->
<?php
global $title;
$title = "Parlsey's To-Do List";
include 'templates/header.php';
?><!--End of the global store title as PHP-->

<?php include 'add_to_do.php'?>

<?php include 'templates/footer.php'; ?>