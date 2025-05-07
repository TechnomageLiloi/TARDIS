Requests.Services = {
    Text: {
        edit: function (name)
        {
            API.request('Services.Text.Edit', {
                name: name
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