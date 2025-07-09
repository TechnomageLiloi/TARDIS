<div id="<?php echo $entity->getID(); ?>" class="testing-card">
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
                <?php echo $entity->parseQuestion(); ?>
            </td>
            <td style="text-align: right;">
                <video id="tube" src="<?php echo $entity->getVideo(); ?>" controls></video>
            </td>
        </tr>
    </table>
</div>