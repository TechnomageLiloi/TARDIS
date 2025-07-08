Requests.Schedule = {
    day: function ()
    {
        API.request('Schedule.Day', {
            debug: false
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    show: function ()
    {
        API.request('Schedule.Show', {
            debug: false
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    edit: function (key_day)
    {
        API.request('Schedule.Edit', {
            key_day: key_day
        }, function (data) {
            const wrap = $('#page');
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
        API.request('Schedule.Save', {
            key_day: key_day,
            data: jq_block.find('[name=data]').val(),
            program: jq_block.find('[name=program]').val()
        }, function (data) {
            Requests.Schedule.show();
        }, function () {

        });
    }
}