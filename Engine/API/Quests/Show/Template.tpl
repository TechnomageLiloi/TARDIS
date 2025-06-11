<link href="/API/Quests/Collection/Style.css" rel="stylesheet" />
<div id="quests-collection" class="stylo">
    <hr/>
    <h1 style="text-align: center;"><?php echo $quest->getTitle(); ?></h1>
    <div style="text-align: center;">
        <?php echo $quest->getUID(); ?> &diams;
        <?php echo $quest->getStatusTitle(); ?> &diams;
        <?php echo $quest->getStart(); ?> &diams;
        <?php echo $quest->getTags(); ?> &diams;
        <?php echo $quest->getData(); ?>
    </div>
    <hr/>
    <?php echo $quest->getProgramParse(); ?>
</div>