<link href="/API/Road/Show/Style.css" rel="stylesheet" />
<div id="application-diary-show" class="stylo">
    <div class="controls">
        <a class="butn" href="javascript:void(0)" onclick="Requests.Road.show('<?php echo $entity->getKey(); ?>');">Show</a>
        <a class="butn" href="javascript:void(0)" onclick="Requests.Road.edit('<?php echo $entity->getKey(); ?>');">Edit</a>
    </div>
    <br/>
    <div class="data">
        <?php echo $entity->getID(); ?> -<?php echo $entity->getTs(); ?> - <?php echo $entity->getData(); ?>
    </div>
    <hr/>
    <?php echo $entity->parse(); ?>
</div>