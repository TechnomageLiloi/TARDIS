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
    }
}