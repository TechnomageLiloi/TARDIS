<style><?php echo file_get_contents(__DIR__ . '/Style.css'); ?></style>

<div id="maps-show" class="stylo">
    <div class="controls">
        <div style="text-align: center;"><?php echo $map; ?></div>
        <hr/>
        <?php echo $entity->getProgram(); ?>
        <hr/>
        <div id="items">
            <table>
                <tr>
                    <th>Filename</th>
                    <th>Actions</th>
                </tr>
                <?php foreach($entity->getItems() as $file): ?>
                    <tr>
                        <td>
                            <a href="<?php echo $file['link']; ?>"><?php echo $file['name']; ?></a>
                        </td>
                        <td>
                            <a href="javascript:void(0)" onclick="Requests.Services.Text.edit('<?php echo $file['name']; ?>');" class="butn">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <hr/>
        <div id="service"></div>
    </div>
</div>