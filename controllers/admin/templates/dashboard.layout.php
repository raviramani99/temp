<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title>
            <?php echo __("StepOne");?>
        </title>
        <?php require('d_include.php'); ?>
    </head>
            <?php
                eval('$oMainController->call'.$sAction.'();');
            ?>

</html>