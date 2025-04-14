<link href="/API/Road/Show/Style.css" rel="stylesheet" />

<div id="application-diary-show" class="stylo">

    <div class="controls">
        <a href="javascript:void(0)" onclick="Requests.Road.show('<?php echo $entity->getKey(); ?>');">Show</a> &diams;
        <a href="javascript:void(0)" onclick="Requests.Road.edit('<?php echo $entity->getKey(); ?>');">Edit</a>
    </div>

    <div class="data">
        <?php echo $entity->getData(); ?><br/>
    </div>

    <hr/>

    <?php echo $entity->parse(); ?>

    <hr/>
</div>