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

    show: function ()
    {
        API.request('Quests.Show', {
            debug: false
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    }
}