<style><?php echo file_get_contents(__DIR__ . '/Style.css'); ?></style>

<div id="services-edit-edit" class="stylo">
    <style>
        textarea
        {
            width: 100%;
            height: 300px;
        }

        input
        {
            width: 100%;
        }
    </style>
    <a class="butn" href="javascript:void(0)" onclick="Requests.Services.Text.save();">Save</a>
    <input name="path" value="<?php echo $path; ?>">
    <textarea name="data"><?php echo $data; ?></textarea>
</div>