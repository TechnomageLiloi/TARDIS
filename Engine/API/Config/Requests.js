Requests.Config = {
    edit: function ()
    {
        API.request('Config.Edit', {
            debug: true
        }, function (data) {
            const wrap = $('#page');
            wrap.html(data.render);
            wrap.show();
        }, function () {

        });
    },

    save: function ()
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#application-diary-edit');
        API.request('Config.Save', {
            update: jq_block.find('[name=update]').val()
        }, function (data) {
            window.location.reload();
        }, function () {

        });
    }
}