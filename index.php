<!--To store the global $title as PHP-->
<?php
global $title;
$title = "Parlsey's To-Do List";
include 'templates/header.php';
?><!--End of the global store title as PHP-->

<h1><?php echo $title;?></h1>

<?php include 'templates/navigation.php'; ?>

<?php include 'templates/footer.php'; ?>