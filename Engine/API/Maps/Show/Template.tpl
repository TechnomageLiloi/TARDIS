<style><?php echo file_get_contents(__DIR__ . '/Style.css'); ?></style>
<div id="application-diary-show" class="stylo">
    <?php if($_SESSION['admin']): ?>
    <div class="data">
        <a class="butn" href="javascript:void(0)" onclick="Requests.Maps.edit('<?php echo $entity->getKey(); ?>');">Edit</a>
        - <?php echo $entity->getStatusTitle(); ?> - <?php echo $entity->getTypeTitle(); ?> - <?php echo $entity->getData(); ?>
        <hr/>
    </div>
    <?php endif; ?>
    <h1 style="text-align: center;">
        <?php echo $entity->getTitle(); ?>
    </h1>
    <?php echo $entity->parse(); ?>
</div>