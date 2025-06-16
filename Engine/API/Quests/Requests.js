Requests.Quests = {
    getCollection: function ()
    {
        API.request('Quests.Collection', {
            'debug': false
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    show: function (keyQuest)
    {
        API.request('Quests.Show', {
            'keyQuest': keyQuest
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    edit: function (keyQuest)
    {
        API.request('Quests.Edit', {
            'keyQuest': keyQuest
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    save: function (keyQuest)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#quests-edit');

        API.request('Quests.Save', {
            'keyQuest': keyQuest,
            'title': jq_block.find('[name="title"]').val(),
            'program': jq_block.find('[name="program"]').val(),
            'status': jq_block.find('[name="status"]').val(),
            'start': jq_block.find('[name="start"]').val(),
            'finish': jq_block.find('[name="finish"]').val(),
            'tags': jq_block.find('[name="tags"]').val(),
            'data': jq_block.find('[name="data"]').val()
        }, function (data) {
            Requests.Quests.getCollection();
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