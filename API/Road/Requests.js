Requests.Road = {
    show: function ()
    {
        API.request('Road.Show', {

        }, function (data) {
            $('#layout').html(data.render);
        }, function () {

        });
    },

    edit: function (key_day)
    {
        API.request('Road.Edit', {
            key_day: key_day
        }, function (data) {
            const wrap = $('#layout');
            wrap.html(data.render);
            wrap.show();
        }, function () {

        });
    },

    save: function (key_day)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#application-diary-edit');
        API.request('Road.Save', {
            key_day: key_day,
            data: jq_block.find('[name=data]').val(),
            program: jq_block.find('[name=program]').val()
        }, function (data) {
            Requests.Road.show();
        }, function () {

        });
    }
}