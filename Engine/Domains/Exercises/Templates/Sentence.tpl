<div id="<?php echo $entity->getID(); ?>" class="testing-sentence">
    <div class="theory" style="display: none;">
        <?php echo $entity->parseQuestion(); ?>
    </div>
    <a href="javascript:void(0)" onclick="Testing.checkSentence('<?php echo $entity->getID(); ?>');">Check</a>
    <hr/>
    <div class="sentence">
        <?php $sentence = $entity->parseSentence(); ?>

        <?php foreach($sentence as $block): ?>
            <?php if(str_starts_with($block, '==')): ?>
                <input type="text" data-correct="<?php echo str_replace('==', '', $block); ?>" data-type="==">
            <?php else: ?>
                <?php echo $block; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>