$(document).ready(function() {
    $('#tabla_scr').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
        "language": {
            "paginate": {
                "previous": "<i class='fa fa-angle-left'></i>",
                "next": "<i class='fa fa-angle-right'></i>"
            }
        },
    "dom": '<"top"i>rt<"bottom"flp><"clear">'
    });
});
$(document).ready(function() {
    $('#tabla_scr2').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
        "language": {
            "paginate": {
                "previous": "<i class='fa fa-angle-left'></i>",
                "next": "<i class='fa fa-angle-right'></i>"
            }
        },
    "dom": '<"top"i>rt<"bottom"flp><"clear">'
    });
});
