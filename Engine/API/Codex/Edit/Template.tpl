<div id="edit" style="text-align: center;">
    <a href="javascript:void(0)" class="butn" onclick="Requests.Codex.save('<?php echo $entity->getKey(); ?>');">Save</a>
    <table>
        <tr>
            <td>Executed</td>
            <td><input type="text" name="executed" value="<?php echo $entity->getExecuted(); ?>"></td>
        </tr>
        <tr>
            <td>Title</td>
            <td><input type="text" name="title" value="<?php echo $entity->getTitle(); ?>"></td>
        </tr>
        <tr>
            <td>Summary</td>
            <td>
                <textarea name="summary"><?php echo $entity->getSummary(); ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Data</td>
            <td>
                <textarea name="data"><?php echo $entity->getData(); ?></textarea>
            </td>
        </tr>
    </table>
    <a href="javascript:void(0)" class="butn" onclick="Requests.Codex.save('<?php echo $entity->getKey(); ?>');">Save</a>
</div>