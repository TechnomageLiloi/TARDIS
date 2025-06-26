Requests.Milestones = {
    show: function ()
    {
        API.request('Milestones.Show', {
            debug: false
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    create: function ()
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Milestones.Create', {
            debug: false
        }, function (data) {
            Requests.Milestones.show();
        }, function () {

        });
    },

    edit: function (key_day)
    {
        API.request('Milestones.Edit', {
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
        API.request('Milestones.Save', {
            key_day: key_day,
            data: jq_block.find('[name=data]').val(),
            program: jq_block.find('[name=program]').val()
        }, function (data) {
            Requests.Milestones.show();
        }, function () {

        });
    }
}