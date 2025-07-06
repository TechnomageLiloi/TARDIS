<div id="menu">
    <input type="text" value="<?php echo $entity->getKey(); ?>"/>
    <a href="javascript:void(0)" class="butn" onclick="Requests.Codex.show($('#menu input').val());">Show</a>
    <a href="javascript:void(0)" class="butn" onclick="Requests.Codex.edit('<?php echo $entity->getKey(); ?>');">Edit</a>
</div>
<div id="show">
    <h3 style="text-align: center;">[<?php echo $entity->getExecuted(); ?>] <?php echo $entity->getTitle(); ?></h3>
    <hr/>
    <?php echo $entity->parseSummary(); ?>
    <hr/>
    <table>
        <tr>
            <th>Title</th>
            <th>Actions</th>
        </tr>
        <?php foreach($children as $entity): ?>
        <tr style="font-weight: bold;" class="levels">
            <td>
                <?php echo $entity->getTitle(); ?>
            </td>
            <td>
                <a href="javascript:void(0)" class="butn" onclick="Requests.Codex.show('<?php echo $entity->getKey(); ?>');">Show</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>