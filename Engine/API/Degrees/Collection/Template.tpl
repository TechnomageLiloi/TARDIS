<style><?php echo file_get_contents(__DIR__ . '/Style.css'); ?></style>
<div id="application-diary-show" class="stylo">
    <table>
        <tr>
            <td>Degree</td>
            <td>Title</td>
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
            <td style="text-align: right;">
                <a href="javascript:void(0)" onclick="Requests.Degrees.edit('<?php echo $entity->getKey(); ?>');">Edit</a> &diams;
                <a href="javascript:void(0)" onclick="Requests.Degrees.remove('<?php echo $entity->getKey(); ?>', '<?php echo $type; ?>');">Remove</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>