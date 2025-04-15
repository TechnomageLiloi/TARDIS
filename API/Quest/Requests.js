Requests.Quest = {
    show: function ()
    {
        API.request('Quest.Show', {
            debug: false
        }, function (data) {
            $('#layout').html(data.render);
        }, function () {

        });
    }
}