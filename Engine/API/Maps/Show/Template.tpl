<style><?php echo file_get_contents(__DIR__ . '/Style.css'); ?></style>
<div id="application-diary-show" class="stylo">
    <div class="data">
        <a class="butn" href="javascript:void(0)" onclick="Requests.Maps.edit('<?php echo $entity->getKey(); ?>');">Edit</a>
        - <?php echo $entity->getStatusTitle(); ?> - <?php echo $entity->getTypeTitle(); ?> - <?php echo $entity->getData(); ?>
    </div>
    <?php echo $entity->parse(); ?>
    <hr/>
</div>