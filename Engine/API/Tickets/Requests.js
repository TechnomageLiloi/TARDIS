Requests.Tickets = {
    create: function (key_day)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Tickets.Create', {
            'key_day': key_day
        }, function (data) {
            Requests.Schedule.show();
        }, function () {

        });
    },


    edit: function (key_ticket)
    {
        API.request('Tickets.Edit', {
            'key_ticket': key_ticket
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    save: function (key_ticket)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#ticket-edit');
        API.request('Tickets.Save', {
            'key_ticket': key_ticket,
            'title': jq_block.find('[name="title"]').val(),
            'status': jq_block.find('[name="status"]').val(),
            'data': jq_block.find('[name=data]').val(),
            'program': jq_block.find('[name=program]').val()
        }, function (data) {
            Requests.Schedule.show();
        }, function () {

        });
    }
}