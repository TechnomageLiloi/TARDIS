Requests.Stones = {
    getCollection: function ()
    {
        API.request('Stones.Collection', {
            'debug': false
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    show: function ()
    {
        API.request('Stones.Show', {
            debug: false
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    }
}