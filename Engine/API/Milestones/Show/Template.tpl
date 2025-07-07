<link href="/API/Milestones/Show/Style.css" rel="stylesheet" />
<div id="application-diary-show" class="stylo">
    <div class="controls">
        <a class="butn" href="javascript:void(0)" onclick="Requests.Milestones.show('<?php echo $entity->getKey(); ?>');">Show</a>
        <a class="butn" href="javascript:void(0)" onclick="Requests.Milestones.edit('<?php echo $entity->getKey(); ?>');">Edit</a>
        &diams;
        <a class="butn" href="javascript:void(0)" onclick="Requests.Milestones.create();">Create new milestone</a>
        &diams;
        <a class="butn" href="javascript:void(0)" onclick="Requests.Tickets.create('0');">Create ticket</a>
    </div>
    <br/>
    <div class="data">
        [<?php echo $entity->getID(); ?>] <?php echo $entity->getData(); ?>
    </div>
    <hr/>
    <?php echo $entity->parse(); ?>
    <hr/>

    <h2>Todos</h2>

    <?php foreach($todos as $title => $tickets): ?>
    <h3><?php echo $title; ?></h3>
    <table>
        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Map</th>
            <th>Data</th>
            <th>Action</th>
        </tr>
        <?php foreach($tickets as $ticket): ?>
        <tr>
            <td><?php echo $ticket->getTitle(); ?></td>
            <td><?php echo $ticket->getStatusTitle(); ?></td>
            <td><?php echo $ticket->getMap(); ?></td>
            <td><?php echo $ticket->getData(); ?></td>
            <td>
                <a href="javascript:void(0)" class="butn" onclick="Requests.Tickets.edit('<?php echo $ticket->getKey(); ?>');">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endforeach; ?>

</div>