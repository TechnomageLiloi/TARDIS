<style><?php echo file_get_contents(__DIR__ . '/Style.css'); ?></style>
<div id="application-diary-show" class="stylo">
    <a href="javascript:void(0)" onclick="Requests.Levels.create();">Create</a>
    <table>
        <tr>
            <td>Level</td>
            <td>Title</td>
            <td>Start</td>
            <td style="text-align: right;">Actions</td>
        </tr>
        <?php foreach($collection as $entity): ?>
        <tr>
            <td>
                <?php echo $entity->getKey(); ?>
            </td>
            <td>
                <?php echo $entity->getTitle(); ?>
            </td>
            <td>
                <?php echo $entity->getStatusTitle(); ?>
            </td>
            <td style="text-align: right;">
                <a href="javascript:void(0)" class="butn" onclick="Requests.Levels.edit('<?php echo $entity->getKey(); ?>');">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>