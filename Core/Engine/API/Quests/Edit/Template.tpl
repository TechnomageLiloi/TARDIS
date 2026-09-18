<link href="/Engine/API/Quests/Edit/Style.css" rel="stylesheet" />
<div id="application-diary-edit">
    <a class="butn" href="javascript:void(0)" onclick="Requests.Quests.save('<?php echo $entity->getKeyQuest(); ?>');">Save</a>
    <a class="butn" href="javascript:void(0)" onclick="Requests.Quests.show('<?php echo $entity->getKeyQuest(); ?>');">Cancel</a>
    <hr/>
    <table>

        <tr>
            <td>Timestamp</td>
            <td>
                <input name="start" type="text" value="<?php echo $entity->getStart(); ?>" />
            </td>
        </tr>
        <tr>
            <td>Title</td>
            <td>
                <input name="title" type="text" value="<?php echo $entity->getTitle(); ?>" />
            </td>
        </tr>
        <tr>
            <td>Quest</td>
            <td>
                <textarea name="quest"><?php echo $entity->getQuest(); ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Mark</td>
            <td>
                <input name="mark" type="text" value="<?php echo $entity->getMark(); ?>" />
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                <select name="status">
                    <?php foreach($statuses as $key => $value): ?>
                    <option value="<?php echo $key; ?>" <?php if($entity->getStatus() == $key): ?>selected="selected"<?php endif; ?>><?php echo $value; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Type</td>
            <td>
                <select name="type">
                    <?php foreach($types as $key => $value): ?>
                    <option value="<?php echo $key; ?>" <?php if($entity->getType() == $key): ?>selected="selected"<?php endif; ?>><?php echo $value; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>Data</td>
            <td>
                <textarea name="data"><?php echo $entity->getData(); ?></textarea>
            </td>
        </tr>
    </table>
    <hr/>
    <a class="butn" href="javascript:void(0)" onclick="Requests.Quests.save('<?php echo $entity->getKeyQuest(); ?>');">Save</a>
    <a class="butn" href="javascript:void(0)" onclick="Requests.Quests.show('<?php echo $entity->getKeyQuest(); ?>');">Cancel</a>
</div>