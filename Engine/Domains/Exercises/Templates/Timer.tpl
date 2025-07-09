<script>
    let countdown = function (timer)
    {
        setInterval(function () {
            var minutes = parseInt(timer / 60, 10);
            var seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            $('#<?php echo $entity->getID(); ?> h3').html(minutes + ":" + seconds);

            if (--timer < 0) {
                timer = 0;
                $('#<?php echo $entity->getID(); ?>').css('background-color', '#ffebeb');
            }
        }, 1000);
    };
</script>
<div id="<?php echo $entity->getID(); ?>" class="testing-card">
    <h3 style="text-align: center;">Timer</h3>
    <hr/>

    <h1 style="text-align: center;"><?php echo $entity->getTitle(); ?></h1>
    <hr/>
    <a href="javascript:void(0)" class="butn" onclick="Testing.turnAround('<?php echo $entity->getID(); ?>');">Turn around</a>
    <hr/>
    <div class="question" style="text-align: center;">
        <?php echo $entity->parseQuestion(); ?>
    </div>
    <div class="answer" style="text-align: center; display: none;">
        <?php echo $entity->parseAnswer(); ?>
    </div>

    <hr/>
    <script>countdown(900);</script>
</div>