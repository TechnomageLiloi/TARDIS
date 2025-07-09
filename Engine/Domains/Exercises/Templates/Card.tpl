<div id="<?php echo $entity->getID(); ?>" class="stylo">
    <hr/>
    <h1 style="text-align: center;"><?php echo $entity->getTitle(); ?></h1>
    <hr/>
    <a href="javascript:void(0)" class="butn" onclick="Testing.turnAround('<?php echo $entity->getID(); ?>');">Turn around</a>
    <hr/>
    <div class="question" style="text-align: center;">
        <?php echo $entity->parseQuestion(); ?>
    </div>
    <div class="answer" style="text-align: center; display: none;">
        <?php echo $entity->parseAnswer(); ?>
    </div>
</div>