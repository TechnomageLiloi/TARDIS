<link href="/API/Quests/Show/Style.css" rel="stylesheet" />
<div id="quests-edit" class="stylo">

    <a href="javascript:void(0)" class="butn" onclick="Requests.Quests.save('<?php echo $quest->getKey(); ?>');">Save</a>

    <table>
        <tr>
            <th>Name</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Goal</td>
            <td>
                <input name="goal" type="text" value="<?php echo $quest->getGoal(); ?>" />
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                <input name="status" type="text" value="<?php echo $quest->getStatus(); ?>" />
            </td>
        </tr>
        <tr>
            <td>Dta</td>
            <td>
                <input name="data" type="text" value="<?php echo $quest->getData(); ?>" />
            </td>
        </tr>
    </table>
</div>