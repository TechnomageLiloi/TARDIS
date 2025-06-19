Requests.Exercises = {
    getCollection: function ()
    {
        API.request('Exercises.Collection', {
            'debug': false
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    show: function (key_exercise)
    {
        API.request('Exercises.Show', {
            'key_exercise': key_exercise
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    edit: function (key_exercise)
    {
        API.request('Exercises.Edit', {
            'key_exercise': key_exercise
        }, function (data) {
            $('#page').html(data.render);
        }, function () {

        });
    },

    save: function (key_exercise)
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        const jq_block = $('#exercises-edit');

        API.request('Exercises.Save', {
            'key_exercise': key_exercise,
            'title': jq_block.find('[name="title"]').val(),
            'program': jq_block.find('[name="program"]').val(),
            'status': jq_block.find('[name="status"]').val(),
            'type': jq_block.find('[name="type"]').val(),
            'theory': jq_block.find('[name="theory"]').val()
        }, function (data) {
            Requests.Exercises.getCollection();
        }, function () {

        });
    },

    create: function ()
    {
        if(!confirm('Are you sure?'))
        {
            return;
        }

        API.request('Exercises.Create', {
            'debug': false
        }, function (data) {
            Requests.Exercises.getCollection();
        }, function () {

        });
    }
}