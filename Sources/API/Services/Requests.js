Requests.Services = {
    Text: {
        edit: function ()
        {
            API.request('Services.Text.Edit', {
                debug: false
            }, function (data) {
                $('#service').html(data.render);
            }, function () {

            });
        },

        save: function ()
        {
            API.request('Services.Text.Save', {
                debug: false
            }, function (data) {
                alert('Saved.');
            }, function () {

            });
        }
    }
}