<div id="<?php echo $entity->getID(); ?>" class="testing-radio">

    <div class="question">
        <a href="javascript:void(0)" onclick="Testing.checkRadio('<?php echo $entity->getID(); ?>');">Check</a>
        <hr/>
        <?php echo $entity->parseQuestion(); ?>
    </div>

    <div class="answer">
        <hr/>
        <?php $answers = $entity->parseAnswers(); ?>
        <?php shuffle($answers); ?>
        <?php foreach($answers as $answer): ?>
            <input type="radio" name="radio-<?php echo $entity->getID(); ?>" data-correct="<?php echo $answer['correct'] ?? ''; ?>">
            <?php $ans = $answer['answer']; ?>
            <?php echo $ans; ?>
            <br/>
        <?php endforeach; ?>
    </div>
</div>