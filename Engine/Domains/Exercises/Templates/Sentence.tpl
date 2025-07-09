<div id="<?php echo $entity->getID(); ?>" class="testing-sentence">

    <?php echo $entity->parseQuestion(); ?>
    <hr/>
    <a href="javascript:void(0)" onclick="Testing.checkSentence('<?php echo $entity->getID(); ?>');" class="butn">Check</a>
    <hr/>
    <div class="sentence">
        <?php $sentence = $entity->parseSentence(); ?>

        <?php foreach($sentence as $block): ?>
            <?php if(str_starts_with($block, '==')): ?>
                <input type="text" data-correct="<?php echo str_replace('==', '', $block); ?>" data-type="==">
            <?php elseif(str_starts_with($block, '>=')): ?>
                <input type="text" data-correct="<?php echo str_replace('>=', '', $block); ?>" data-type=">=">
            <?php elseif(str_starts_with($block, '<=')): ?>
                <input type="text" data-correct="<?php echo str_replace('<=', '', $block); ?>" data-type="<=">
            <?php elseif(str_starts_with($block, '><')): ?>
                <?php
                    $correct = str_replace('><', '', $block);
                    $two = explode('-', $correct);
                ?>
                <input type="text" data-from="<?php echo $two[0]; ?>" data-to="<?php echo $two[1]; ?>" data-type="><">
            <?php else: ?>
                <?php echo $block; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>