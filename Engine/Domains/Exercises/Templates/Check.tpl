<div id="<?php echo $entity->getID(); ?>" class="testing-check">

    <div class="question">
        <a href="javascript:void(0)" onclick="Testing.checkCheck('<?php echo $entity->getID(); ?>');">Check</a>
        <hr/>
        <?php echo $entity->parseQuestion(); ?>
    </div>

    <div class="answer">
        <hr/>
        <?php $answers = $entity->parseAnswers(); ?>
        <?php shuffle($answers); ?>
        <?php foreach($answers as $answer): ?>
            <input type="checkbox" name="check-<?php echo $entity->checkCheck(); ?>" data-correct="<?php echo $answer['correct'] ?? ''; ?>">
            <?php $ans = $answer['answer']; ?>
            <?php echo $ans; ?>
            <br/>
        <?php endforeach; ?>
    </div>
</div>