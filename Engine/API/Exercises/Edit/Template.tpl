<link href="/API/Exercises/Show/Style.css" rel="stylesheet" />
<div id="exercises-edit" class="stylo">

    <a href="javascript:void(0)" class="butn" onclick="Requests.Exercises.save('<?php echo $entity->getKey(); ?>');">Save</a>

    <table>
        <tr>
            <th>Name</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Title</td>
            <td>
                <input name="title" type="text" value="<?php echo $entity->getTitle(); ?>" />
            </td>
        </tr>
        <tr>
            <td>Program</td>
            <td>
                <textarea name="program"><?php echo $entity->getProgram(); ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                <input name="status" type="text" value="<?php echo $entity->getStatus(); ?>" />
            </td>
        </tr>
        <tr>
            <td>Type</td>
            <td>
                <input name="type" type="text" value="<?php echo $entity->getType(); ?>" />
            </td>
        </tr>
        <tr>
            <td>Theory</td>
            <td>
                <textarea name="theory"><?php echo $entity->getTheory(); ?></textarea>
            </td>
        </tr>
    </table>
</div>