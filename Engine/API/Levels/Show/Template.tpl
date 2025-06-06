<style>
    #table-road
    {
        width: 100%;
        border-collapse: collapse;
    }

    .hint .tooltiptext
    {
        display: none;
        position: absolute;
        background-color: white;
        border: black 1px solid;
        padding: 2px;
    }

    .hint:hover .tooltiptext
    {
        display: block;
    }
</style>

<table id="table-road">
    <tr>
        <td>
            <?php echo $entity->getTitle(); ?>
        </td>
        <td style="text-align: right;">
            <a href="javascript:void(0)" onclick="Requests.Levels.edit('<?php echo $entity->getKey(); ?>');">Edit</a> &diams;
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $entity->getProgramParse(); ?>
        </td>
    </tr>
</table>
