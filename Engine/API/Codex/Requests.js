Requests.Codex = {
    show: function (key)
    {
        API.request('Codex.Show', {
            key_codex: key
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    edit: function (key)
    {
        API.request('Codex.Edit', {
            'key_codex': key
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
        API.request('Codex.Save', {
            key_codex: key,
            executed: jq_block.find('[name=executed]').val(),
            title: jq_block.find('[name=title]').val(),
            summary: jq_block.find('[name=summary]').val(),
            data: jq_block.find('[name=data]').val()
        }, function (data) {
            Requests.Codex.show(key);
        }, function () {

        });
    }
};
