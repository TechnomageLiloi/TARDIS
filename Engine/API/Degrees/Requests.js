Requests.Degrees = {
    getCollection: function ()
    {
        API.request('Degrees.Collection', {
            debug: true
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    show: function ()
    {
        API.request('Degrees.Show', {
            debug: true
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    create: function ()
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Degrees.Create', {
            debug: false
        }, function (data) {
            Requests.Degrees.getCollection();
        }, function () {

        });
    },

    edit: function (key_degree)
    {
        API.request('Degrees.Edit', {
            key_degree: key_degree
        }, function (data) {
            const wrap = $('#page');
            wrap.html(data.render);
            wrap.show();
        }, function () {

        });
    },

    save: function (key_degree)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#application-diary-edit');
        API.request('Degrees.Save', {
            key_degree: key_degree,
            title: jq_block.find('[name=title]').val(),
            status: jq_block.find('[name=status]').val(),
            summary: jq_block.find('[name=summary]').val(),
            start: jq_block.find('[name=start]').val(),
            finish: jq_block.find('[name=finish]').val()
        }, function (data) {
            Requests.Degrees.getCollection();
        }, function () {

        });
    }
}