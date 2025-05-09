<link href="/API/Quests/Collection/Style.css" rel="stylesheet" />
<div id="quests-collection" class="stylo">
    <table>
        <tr>
            <th>UID</th>
            <th>Status</th>
            <th>Goal</th>
            <th>Actions</th>
        </tr>
        <?php foreach($quests as $quest): ?>
        <tr>
            <td><?php echo $quest->getKey(); ?></td>
            <td><?php echo $quest->getStatusTitle(); ?></td>
            <td><?php echo $quest->getGoal(); ?></td>
            <td></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>