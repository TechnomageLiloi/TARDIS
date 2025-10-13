Requests.Levels = {
    getCollection: function ()
    {
        API.request('Levels.Collection', {
            debug: true
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    show: function ()
    {
        API.request('Levels.Show', {
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

        API.request('Levels.Create', {
            debug: false
        }, function (data) {
            Requests.Levels.getCollection();
        }, function () {

        });
    },

    edit: function (key_level)
    {
        API.request('Levels.Edit', {
            key_level: key_level
        }, function (data) {
            const wrap = $('#page');
            wrap.html(data.render);
            wrap.show();
        }, function () {

        });
    },

    save: function (key_level)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#application-diary-edit');
        API.request('Levels.Save', {
            key_level: key_level,
            title: jq_block.find('[name=title]').val(),
            status: jq_block.find('[name=status]').val(),
            summary: jq_block.find('[name=summary]').val(),
            start: jq_block.find('[name=start]').val(),
            finish: jq_block.find('[name=finish]').val()
        }, function (data) {
            Requests.Levels.getCollection();
        }, function () {

        });
    }
}