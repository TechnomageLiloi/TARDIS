Requests.Quests = {
    show: function ()
    {
        API.request('Quests.Show', {
            'debug': false
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    edit: function ()
    {
        API.request('Quests.Edit', {
            'debug': false
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    save: function ()
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#quests-edit');

        API.request('Quests.Save', {
            'title': jq_block.find('[name="title"]').val(),
            'program': jq_block.find('[name="program"]').val(),
            'status': jq_block.find('[name="status"]').val(),
            'start': jq_block.find('[name="start"]').val(),
            'tags': jq_block.find('[name="tags"]').val(),
            'data': jq_block.find('[name="data"]').val()
        }, function (data) {
            Requests.Quests.show();
        }, function () {

        });
    },

    create: function ()
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Quests.Create', {
            'debug': false
        }, function (data) {
            Requests.Quests.show();
        }, function () {

        });
    }
}