<!DOCTYPE html>
<html lang="en">
    <head>

        <script><?php echo file_get_contents(dirname(__DIR__) . '/vendor/technomage-liloi/rune-framework/Frontside/Library/Jquery.min.js'); ?></script>
        <script><?php echo file_get_contents(dirname(__DIR__) . '/vendor/technomage-liloi/rune-framework/Frontside/Library/Underscore.min.js'); ?></script>
        <script><?php echo file_get_contents(dirname(__DIR__) . '/vendor/technomage-liloi/rune-api/Client/API.js'); ?></script>

        <?php foreach($config['scripts'] as $value): ?>
        <script src="<?php echo $value; ?>"></script>
        <?php endforeach; ?>

        <title><?php echo $config['title']; ?></title>
    </head>
    <body>
        <div style="text-align: center;">
            <a class="butn" href="javascript:void(0)" onclick="window.location.reload();">Refresh</a>
        </div>
        <div id="page">
            <script>//Requests.Maps.show();</script>
        </div>
    </body>
</html>