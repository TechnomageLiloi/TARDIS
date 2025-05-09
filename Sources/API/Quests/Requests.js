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

    edit: function (keyQuest)
    {
        API.request('Quests.Edit', {
            keyQuest: keyQuest
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
            'goal': jq_block.find('[name="goal"]').val(),
            'status': jq_block.find('[name="status"]').val(),
            'data': jq_block.find('[name="data"]').val()
        }, function (data) {
            Requests.Quests.getCollection();
        }, function () {

        });
    }
}