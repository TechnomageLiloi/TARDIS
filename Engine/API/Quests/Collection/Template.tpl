<div id="modules-levels-collection">
    <link href="/API/Levels/Collection/Style.css" rel="stylesheet" />

    <div style="text-align: center;">
        <a href="javascript:void(0)" class="butn" onclick="Requests.Levels.create();">Create</a>
    </div>

    <?php if($collection->count()): ?>
        <hr/>
        <table>
            <tr>
                <th>level</th>
                <th>Title</th>
                <th>Goal</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            <?php foreach($collection as $entity): ?>
                <tr style="font-weight: bold;" class="levels <?php echo $entity->getStatusClass(); ?>">
                    <td>
                        <?php echo $entity->getKey(); ?>
                    </td>
                    <td>
                        <?php echo $entity->getTitle(); ?>
                    </td>
                    <td>
                        <?php echo $entity->getGoal(); ?>
                    </td>
                    <td>
                        <?php echo $entity->getStatusTitle(); ?>
                    </td>
                    <td>
                        <a href="javascript:void(0)" class="butn" onclick="Requests.Levels.show('<?php echo $entity->getKey(); ?>');">Show</a> &diams;
                        <a href="javascript:void(0)" class="butn" onclick="Requests.Levels.edit('<?php echo $entity->getKey(); ?>');">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>