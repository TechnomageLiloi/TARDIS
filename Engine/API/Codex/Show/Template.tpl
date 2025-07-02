<div id="menu">
    <input type="text" value="."/>
    <a href="javascript:void(0)" class="butn" onclick="Requests.Codex.show($('#menu input').val());">Create power record</a>
</div>
<div id="show" style="text-align: center;">
    <h3>Last added: <?php echo $entity->getTitle(); ?></h3>
</div>