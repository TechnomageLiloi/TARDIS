Requests.Atoms = {
    show: function ()
    {
        API.request('Atoms.Show', {
            debug: false
        }, function (data) {
            $('#layout').html(data.render);
        }, function () {

        });
    }
}