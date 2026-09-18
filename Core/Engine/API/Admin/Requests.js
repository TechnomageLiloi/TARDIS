Requests.Admin = {
    Password: {
        show: function ()
        {
            API.request('Admin.Show', {
                debug: true
            }, function (data) {
                $('#page').html(data.render);
            }, function () {

            });
        },

        login: function ()
        {
            const jq_block = $('#admin-show');

            API.request('Admin.Login', {
                password: jq_block.find('[name=password]').val()
            }, function (data) {
                let check = data.check;

                if(!check)
                {
                    $("#error").html('Password incorrect');
                    return;
                }

                window.location.reload();
            }, function () {

            });
        },

        logout: function ()
        {
            API.request('Admin.Logout', {
                debug: true
            }, function (data) {
                window.location.reload();
            }, function () {

            });
        }
    },

    Database: {
        dump: function ()
        {
            API.request('Admin.Database.Dump', {
                debug: true
            }, function (data) {
                $('#page').html(data.render);
            }, function () {

            });
        },
    }
}