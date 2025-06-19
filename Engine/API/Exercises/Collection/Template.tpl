<div id="modules-levels-collection">
    <link href="/API/Levels/Collection/Style.css" rel="stylesheet" />

    <div style="text-align: center;">
        <a class="butn" href="javascript:void(0)" onclick="Requests.Exercises.create();">Create exercise</a>
    </div>

    <?php if($collection->count()): ?>
        <hr/>
        <table>
            <tr>
                <th>level</th>
                <th>Title</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            <?php foreach($collection as $entity): ?>
                <tr style="font-weight: bold;" class="levels">
                    <td>
                        <?php echo $entity->getID(); ?>
                    </td>
                    <td>
                        <?php echo $entity->getTitle(); ?>
                    </td>
                    <td>
                        <?php echo $entity->getStatusTitle(); ?>
                    </td>
                    <td>
                        <a href="javascript:void(0)" class="butn" onclick="Requests.Exercises.show('<?php echo $entity->getKey(); ?>');">Show</a> &diams;
                        <a href="javascript:void(0)" class="butn" onclick="Requests.Exercises.edit('<?php echo $entity->getKey(); ?>');">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>