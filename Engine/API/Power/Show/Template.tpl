<div id="menu">

    <a href="javascript:void(0)" class="butn" onclick="Requests.Power.create();">Create power record</a>
</div>
<div id="show" style="text-align: center;">

    <h3>Last added: <?php echo $collection->getPeriod(); ?></h3>

    <table>
        <tr>
            <th>Timestamp</th>
            <th>First name</th>
            <th style="text-align: right;">Actions</th>
        </tr>
        <?php foreach($collection as $entity): ?>
        <tr>
            <td><?php echo $entity->getTimestamp("Y F d, g:i A"); ?></td>
            <td>
                <?php echo $entity->getFirstname(); ?>
                <div style="color: gray;font-size: x-small;"><?php echo $entity->getSummary(); ?></div>
                <div style="color: silver;font-size: x-small;"><?php echo $entity->getData(); ?></div>
            </td>
            <td style="text-align: right;">
                <a href="javascript:void(0)" class="butn" onclick="Requests.Power.edit('<?php echo $entity->getKey(); ?>');">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>