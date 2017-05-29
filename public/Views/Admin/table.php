<!DOCTYPE html>
<html>
<head>
    <title>Table</title>
    <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.jqueryui.min.css">
</head>

<body>

<table id="table_id" class="display compact "></table>

<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.jqueryui.min.js"></script>
<script>

    $(document).ready(function() {
        $('#table_id').DataTable({
            "processing" : true,
            "ajax" : {
                url : "movies.json",
                dataSrc : function(data) {
                    var dataTable = [];
                    for (i = 0; i < data.length; i++) {
                        dataTable.push([data[i].movie, data[i].year, data[i].url]);

                    }
                    return dataTable
                }
            },

            columns: [
                { data: 0, title: 'Movie'},
                { data: 1, title: 'Year'},
                { data: 2, title: 'Link',
                    "render": function(data, type){
                        if(type === 'display'){
                            data = '<a href="' + data + '" target="_blank">' + data + '</a>';
                        }

                        return data;
                    }}
            ]
        });
    });
</script>
</body>
</html>