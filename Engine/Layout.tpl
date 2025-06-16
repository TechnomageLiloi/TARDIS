<!DOCTYPE html>
<html lang="en">
    <head>
        <script><?php echo file_get_contents(dirname(__DIR__) . '/vendor/technomage-liloi/rune-framework/Frontside/Library/Jquery.min.js'); ?></script>
        <script><?php echo file_get_contents(dirname(__DIR__) . '/vendor/technomage-liloi/rune-framework/Frontside/Library/Underscore.min.js'); ?></script>
        <script><?php echo file_get_contents(dirname(__DIR__) . '/vendor/technomage-liloi/rune-api/Client/API.js'); ?></script>

        <script><?php echo file_get_contents(dirname(__DIR__) . '/vendor/technomage-liloi/stylo/Source/Stylo.js'); ?></script>

        <script><?php echo file_get_contents(dirname(__DIR__) . '/Engine/API/Requests.js'); ?></script>
        <script><?php echo file_get_contents(dirname(__DIR__) . '/Engine/API/Maps/Requests.js'); ?></script>
        <script><?php echo file_get_contents(dirname(__DIR__) . '/Engine/API/Services/Requests.js'); ?></script>
        <script><?php echo file_get_contents(dirname(__DIR__) . '/Engine/API/Levels/Requests.js'); ?></script>
        <script><?php echo file_get_contents(dirname(__DIR__) . '/Engine/API/Road/Requests.js'); ?></script>
        <script><?php echo file_get_contents(dirname(__DIR__) . '/Engine/API/Quests/Requests.js'); ?></script>

        <style><?php echo file_get_contents(__DIR__ . '/Style.css'); ?></style>

        <title><?php echo $config['title']; ?></title>
    </head>
    <body>
        <div style="text-align: center;">
            <a class="butn" href="javascript:void(0)" onclick="window.location.reload();">Map</a>
            &diamondsuit;
            <a href="javascript:void(0)" class="butn" onclick="Requests.Levels.getCollection();">Levels</a>
            &diamondsuit;
            <a class="butn" href="javascript:void(0)" onclick="Requests.Quests.getCollection();">Quests</a>
            <a class="butn" href="javascript:void(0)" onclick="Requests.Quests.create();">Create quest</a>
            &diamondsuit;
            <a class="butn" href="javascript:void(0)" onclick="Requests.Road.show();">Show current road</a>
            <a class="butn" href="javascript:void(0)" onclick="Requests.Road.create();">Make next step</a>
        </div>
        <hr/>
        <div id="page">
            <script>Requests.Maps.show();</script>
        </div>
    </body>
</html>