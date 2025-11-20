<style><?php echo file_get_contents(__DIR__ . '/Style.css'); ?></style>
<div id="admin-show" class="stylo">
    <h1 style="text-align: center;">
        Enter password
    </h1>
    <div class="data" style="text-align: center;">
        <input type="password" name="password" value="">
        <a href="javascript:void(0)" class="butn" onclick="Requests.Admin.Password.login();">Check</a>
        <div id="error" style="color: red;"></div>
    </div>

</div>