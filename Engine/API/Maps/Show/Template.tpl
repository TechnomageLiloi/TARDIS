<style><?php echo file_get_contents(__DIR__ . '/Style.css'); ?></style>
<div id="application-diary-show" class="stylo">
    <?php foreach($collection as $entity): ?>
        <div class="data">
            <a class="butn" href="javascript:void(0)" onclick="Requests.Maps.edit('<?php echo $entity->getKey(); ?>');">Edit</a>
            <?php echo $entity->getStatusTitle(); ?> - <?php echo $entity->getStart(); ?> - <?php echo $entity->getFinish(); ?> - <?php echo $entity->getData(); ?>
        </div>


        <?php $teacher = $entity->parseTeacher(); ?>
        <?php if($teacher): ?>
            <div style="border: silver 1px solid;padding: 10px;">
                <?php echo $teacher; ?>
            </div>
        <?php endif; ?>

        <?php echo $entity->parse(); ?>
        <hr/>
    <?php endforeach; ?>
</div>