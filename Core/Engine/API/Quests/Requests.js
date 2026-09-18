Requests.Quests = {
    schedule: function ()
    {
        API.request('Quests.Schedule', {
            'debuug': true
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    show: function (key_quest)
    {
        API.request('Quests.Show', {
            key_quest: key_quest
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

        API.request('Quests.Create', {
            'debuug': true
        }, function (data) {
            Requests.Quests.schedule();
        }, function () {

        });
    },

    edit: function (key_quest)
    {
        API.request('Quests.Edit', {
            key_quest: key_quest
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
        API.request('Quests.Save', {
            key_quest: key_quest,
            start: jq_block.find('[name=start]').val(),
            status: jq_block.find('[name=status]').val(),
            type: jq_block.find('[name=type]').val(),
            title: jq_block.find('[name=title]').val(),
            quest: jq_block.find('[name=quest]').val(),
            mark: jq_block.find('[name=mark]').val(),
            data: jq_block.find('[name=data]').val()
        }, function (data) {
            Requests.Quests.schedule();
        }, function () {

        });
    },

    inHand: function (key_quest)
    {
        const jq_block = $('#application-diary-edit');
        API.request('Quests.InHand', {
            key_quest: key_quest
        }, function (data) {
            Requests.Quests.schedule();
        }, function () {

        });
    }
}