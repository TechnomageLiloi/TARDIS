<div id="menu">
    <input type="text" value="<?php echo $entity->getKey(); ?>"/>
    <a href="javascript:void(0)" class="butn" onclick="Requests.Codex.show($('#menu input').val());">Create power record</a>
    <a href="javascript:void(0)" class="butn" onclick="Requests.Codex.edit('<?php echo $entity->getKey(); ?>');">Edit</a>
</div>
<div id="show">
    <h3 style="text-align: center;">[<?php echo $entity->getExecuted(); ?>] <?php echo $entity->getTitle(); ?></h3>
    <hr/>
    <?php echo $entity->parseSummary(); ?>
</div>