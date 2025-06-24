Requests.Euphoria = {
    show: function ()
    {
        API.request('Euphoria.Show', {
            'debug': true
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    edit: function (key)
    {
        API.request('Euphoria.Edit', {
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
        API.request('Euphoria.Save', {
            key: key,
            title: jq_block.find('[name=title]').val(),
            price: jq_block.find('[name=price]').val(),
            dt: jq_block.find('[name=dt]').val(),
            summary: jq_block.find('[name=summary]').val(),
            data: jq_block.find('[name=data]').val()
        }, function (data) {
            Requests.Euphoria.show();
        }, function () {

        });
    },

    create: function ()
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Euphoria.Create', {
            'debug': true
        }, function (data) {
            Requests.Euphoria.show();
        }, function () {

        });
    },
};
