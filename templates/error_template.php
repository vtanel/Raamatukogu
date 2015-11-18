<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= PROJECT_NAME ?></title>
</head>

<body>

<div class="container">
    <br/>
    <br/>
    <? if (isset($errors)): ?>
        <? foreach ($errors as $error): ?>
            <div class="alert alert-danger">
                <?= $error ?>
            </div>
        <? endforeach; ?>
    <? elseif (isset($error_file_name_or_msg)): ?>
        <? require 'views/errors/' . $error_file_name_or_msg . '_error_view.php' ?>
        <?
    else: ?>
        Tundmatu viga!
    <? endif; ?>

</div>
<!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>