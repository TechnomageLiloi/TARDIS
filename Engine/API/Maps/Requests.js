Requests.Maps = {
    show: function ()
    {
        API.request('Maps.Show', {
            debug: true
        }, function (data) {
            $('#page').html(data.render);
            Stylo.Trigger.initialize();

            $('.stylo .stylo-block') .hide();
            $('#start') .show();

            $('.stylo .button-trigger').click(function () {
                const target = $(this);
                const data = target.data('key');
                $('.stylo .stylo-block') .hide();
                $('#' + data).show();
            });

        }, function () {

        });
    },

    create: function ()
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Maps.Create', {
            debug: false
        }, function (data) {
            Requests.Maps.show();
        }, function () {

        });
    },

    edit: function (key_step)
    {
        API.request('Maps.Edit', {
            key_step: key_step
        }, function (data) {
            const wrap = $('#page');
            wrap.html(data.render);
            wrap.show();
        }, function () {

        });
    },

    save: function (key_quest)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#application-diary-edit');
        API.request('Maps.Save', {
            key_quest: key_quest,
            title: jq_block.find('[name=title]').val(),
            status: jq_block.find('[name=status]').val(),
            type: jq_block.find('[name=type]').val(),
            data: jq_block.find('[name=data]').val(),
            program: jq_block.find('[name=program]').val()
        }, function (data) {
            Requests.Maps.show();
        }, function () {

        });
    }
}