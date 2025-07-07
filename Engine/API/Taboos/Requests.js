Requests.Taboos = {
    show: function ()
    {
        API.request('Taboos.Show', {
            'debug': true
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    edit: function (key)
    {
        API.request('Taboos.Edit', {
            'key': key
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    save: function (key)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#edit');
        API.request('Taboos.Save', {
            key: key,
            title: jq_block.find('[name=title]').val(),
            dt: jq_block.find('[name=dt]').val(),
            summary: jq_block.find('[name=summary]').val(),
            data: jq_block.find('[name=data]').val()
        }, function (data) {
            Requests.Taboos.show();
        }, function () {

        });
    },

    create: function ()
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Taboos.Create', {
            'debug': true
        }, function (data) {
            Requests.Taboos.show();
        }, function () {

        });
    },
};
