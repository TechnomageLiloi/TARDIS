Requests.Areas = {
    show: function ()
    {
        API.request('Areas.Show', {
            debug: false
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    }
}