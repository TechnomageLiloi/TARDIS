<div id="edit" style="text-align: center;">
    <a href="javascript:void(0)" class="butn" onclick="Requests.Power.save('<?php echo $entity->getKey(); ?>');">Save</a>
    <table>
        <tr>
            <td>First name</td>
            <td><input type="text" name="firstname" value="<?php echo $entity->getFirstname(); ?>"></td>
        </tr>
        <tr>
            <td>Full name</td>
            <td><input type="text" name="fullname" value="<?php echo $entity->getFullname(); ?>"></td>
        </tr>
        <tr>
            <td>Nickname</td>
            <td><input type="text" name="nickname" value="<?php echo $entity->getNickname(); ?>"></td>
        </tr>
        <tr>
            <td>Degree</td>
            <td><input type="text" name="degree" value="<?php echo $entity->getDegree(); ?>"></td>
        </tr>
        <tr>
            <td>Type</td>
            <td><input type="text" name="type" value="<?php echo $entity->getType(); ?>"></td>
        </tr>
        <tr>
            <td>Addition timestamp</td>
            <td><input type="text" name="dt" value="<?php echo $entity->getDt(); ?>"></td>
        </tr>
        <tr>
            <td>Summary</td>
            <td>
                <textarea name="summary"><?php echo $entity->getSummary(); ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Data</td>
            <td>
                <textarea name="data"><?php echo $entity->getData(); ?></textarea>
            </td>
        </tr>
    </table>
    <a href="javascript:void(0)" class="butn" onclick="Requests.Power.save('<?php echo $entity->getKey(); ?>');">Save</a>
</div>