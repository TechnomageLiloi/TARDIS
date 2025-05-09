<link href="/API/Quests/Collection/Style.css" rel="stylesheet" />
<div id="quests-collection" class="stylo">
    <table>
        <tr>
            <th>UID</th>
            <th>Status</th>
            <th>Goal</th>
            <th>Actions</th>
        </tr>
        <?php foreach($quests as $keyQuest => $quest): ?>
        <tr>
            <td><?php echo $keyQuest; ?></td>
            <td><?php echo $quest->getStatusTitle(); ?></td>
            <td><?php echo $quest->getGoal(); ?></td>
            <td>
                <a href="javascript:void(0)" class="butn" onclick="Requests.Quests.edit('<?php echo $keyQuest; ?>');">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>