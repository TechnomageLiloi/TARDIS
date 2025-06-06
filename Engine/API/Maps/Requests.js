Requests.Maps = {
    show: function ()
    {
        API.request('Maps.Show', {
            debug: false
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    }
}