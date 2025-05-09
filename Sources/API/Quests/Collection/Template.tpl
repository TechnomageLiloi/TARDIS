<link href="/API/Quests/Collection/Style.css" rel="stylesheet" />
<div id="quests-collection" class="stylo">
    <table>
        <tr>
            <th>UID</th>
            <th>Status</th>
            <th>Goal/Data</th>
            <th>Actions</th>
        </tr>
        <?php foreach($quests as $keyQuest => $quest): ?>
        <tr>
            <td><?php echo $keyQuest; ?></td>
            <td><?php echo $quest->getStatusTitle(); ?></td>
            <td>
                <?php echo $quest->getGoal(); ?>
                <br/>
                <span style="color: gray;"><?php echo $quest->getData(); ?></span>
            </td>
            <td>
                <a href="javascript:void(0)" class="butn" onclick="Requests.Quests.edit('<?php echo $keyQuest; ?>');">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>