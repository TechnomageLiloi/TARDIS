<link href="/API/Maps/Edit/Style.css" rel="stylesheet" />
<div id="application-diary-edit">
    <a class="butn" href="javascript:void(0)" onclick="Requests.Maps.save('<?php echo $entity->getKey(); ?>');">Save</a>
    <a class="butn" href="javascript:void(0)" onclick="Requests.Maps.show('<?php echo $entity->getKey(); ?>');">Cancel</a>
    <hr/>
    <table>

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
            <td>Start</td>
            <td>
                <input name="start" type="text" value="<?php echo $entity->getStart(); ?>" />
            </td>
        </tr>
        <tr>
            <td>Finish</td>
            <td>
                <input name="finish" type="text" value="<?php echo $entity->getFinish(); ?>" />
            </td>
        </tr>

        <tr><td>Teacher</td><td><textarea name="teacher"><?php echo $entity->getTeacher(); ?></textarea></td></tr>
        <tr><td>Program</td><td><textarea name="program"><?php echo $entity->getProgram(); ?></textarea></td></tr>
        <tr><td>Data</td><td><textarea name="data"><?php echo $entity->getData(); ?></textarea></td></tr>
    </table>
    <hr/>
    <a class="butn" href="javascript:void(0)" onclick="Requests.Maps.save('<?php echo $entity->getKey(); ?>');">Save</a>
    <a class="butn" href="javascript:void(0)" onclick="Requests.Maps.show('<?php echo $entity->getKey(); ?>');">Cancel</a>
</div>