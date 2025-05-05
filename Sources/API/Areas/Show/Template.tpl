<style><?php echo file_get_contents(__DIR__ . '/Style.css'); ?></style>

<div id="areas-show" class="stylo">
    <div class="controls">
        <table>
        <?php foreach($entity->getItems() as $file): ?>
            <tr>
                <td>
                    <a href="<?php echo $file['link']; ?>"><?php echo $file['name']; ?></a>
                </td>
            </tr>
        <?php endforeach; ?>
        </table>
    </div>
</div>