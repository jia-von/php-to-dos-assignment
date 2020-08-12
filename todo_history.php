<!--Before accessing storage on our server related to a particular client session, we need to announce we will use session using: session_start()-->
<?php session_start(); ?>

<!--Create a function to be invoked to produce a list of tasks stored in $activeToDoList-->

<?php function activeToDoList () { ?>
    <ul>
        <?php foreach ($_SESSION['task-history'] as $taskItem) : ?>
            <li>
                <?php echo $taskItem;?>
            </li>
        <?php endforeach; ?>
    </ul>    
<?php }; ?>