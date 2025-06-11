<link href="/API/Quests/Show/Style.css" rel="stylesheet" />
<div id="quests-edit" class="stylo">

    <a href="javascript:void(0)" class="butn" onclick="Requests.Quests.save();">Save</a>

    <table>
        <tr>
            <th>Name</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Title</td>
            <td>
                <input name="title" type="text" value="<?php echo $quest->getTitle(); ?>" />
            </td>
        </tr>
        <tr>
            <td>Program</td>
            <td>
                <textarea name="program"><?php echo $quest->getProgram(); ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                <input name="status" type="text" value="<?php echo $quest->getStatus(); ?>" />
            </td>
        </tr>
        <tr>
            <td>Start</td>
            <td>
                <input name="start" type="text" value="<?php echo $quest->getStart(); ?>" />
            </td>
        </tr>
        <tr>
            <td>Tags</td>
            <td>
                <input name="tags" type="text" value="<?php echo $quest->getTags(); ?>" />
            </td>
        </tr>
        <tr>
            <td>Data</td>
            <td>
                <textarea name="data"><?php echo $quest->getData(); ?></textarea>
            </td>
        </tr>
    </table>
</div>