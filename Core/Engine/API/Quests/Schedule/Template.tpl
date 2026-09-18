<style><?php echo file_get_contents(__DIR__ . '/Style.css'); ?></style>

<div id="quests-schedule">

    <style>
        .to-do
        {
            background-color: #ececec;
        }
        .in-hand
        {
            background-color: #feffd3;
        }
        .success
        {
            background-color: #d6ffd3;
        }
        .failure
        {
            background-color: #ffd3d3;
        }
    </style>

    <div style="text-align: center;">
        <a class="butn" href="javascript:void(0)" onclick="Requests.Quests.create();">Create new quest</a>
        <h1>Quests</h1>
    </div>

    <table style="width: 100%;">
        <tr style="text-align: left;">
            <th>Unique ID</th>
            <th>Timestamp</th>
            <th>Mark</th>
            <th>Title</th>
            <th>Status</th>
            <th>Data</th>
            <th style="text-align: right;">Actions</th>
        </tr>
        <?php foreach($quests as $key => $entity): ?>
        <tr class="<?php echo $entity->getClass(); ?>">
            <td>#<?php echo $entity->getUID(); ?></td>
            <td><?php echo $entity->getStart(); ?></td>
            <td><?php echo $entity->getMark(); ?></td>
            <td><?php echo $entity->getTitle(); ?></td>
            <td><?php echo $entity->getClass(); ?></td>
            <td><?php echo $entity->getData(); ?></td>
            <td style="text-align: right;">
                <a href="javascript:void(0)" class="butn" onclick="Requests.Quests.inHand('<?php echo $entity->getKeyQuest(); ?>');">Set In Hand</a>
                <a href="javascript:void(0)" class="butn" onclick="Requests.Quests.show('<?php echo $entity->getKeyQuest(); ?>');">Show</a>
                <a href="javascript:void(0)" class="butn" onclick="Requests.Quests.edit('<?php echo $entity->getKeyQuest(); ?>');">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <div style="text-align: center;">
        <h1>Schedule</h1>

        <?php $hours = $schedule; ?>
    </div>

    <style>
        .quest
        {
            border: silver 1px solid;
            margin-bottom: 5px;
            padding: 5px;

        }
    </style>

    <table style="width: 100%; border: silver 1px solid;">
        <?php foreach($hours as $key => $entities): ?>
            <tr style="vertical-align: top;">
                <th style="width: 100px;"><?php echo $key; ?>:00</th>
                <td>
                    <?php foreach($entities as $entity): ?>
                        <div class="quest <?php echo $entity->getClass(); ?>">
                            <a href="javascript:void(0)" class="butn" onclick="Requests.Quests.show('<?php echo $entity->getKeyQuest(); ?>');">Show</a>
                            <a href="javascript:void(0)" class="butn" onclick="Requests.Quests.edit('<?php echo $entity->getKeyQuest(); ?>');">Edit</a>
                            [<strong><?php echo $entity->getMark(); ?></strong>]
                            &diams;
                            <?php echo $entity->getTitle(); ?>
                            &diams;
                            <?php echo $entity->getData(); ?>
                        </div>
                    <?php endforeach; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>