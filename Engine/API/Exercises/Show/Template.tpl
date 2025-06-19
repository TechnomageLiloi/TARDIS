<link href="/API/Exercises/Collection/Style.css" rel="stylesheet" />
<div id="exercises-collection" class="stylo">
    <hr/>
    <h1 style="text-align: center;"><?php echo $entity->getTitle(); ?></h1>
    <hr/>
    <a href="javascript:void(0)" class="butn" onclick="$('#question').toggle();$('#answer').toggle();">Turn around</a>
    <hr/>
    <div id="question" style="text-align: center;">
        <?php echo $entity->parseQuestion(); ?>
    </div>
    <div id="answer" style="text-align: center; display: none;">
        <?php echo $entity->parseAnswer(); ?>
    </div>
</div>