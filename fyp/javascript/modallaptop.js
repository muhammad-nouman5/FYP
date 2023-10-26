$(function () {
    
    $('#specificationtable').on('show.bs.modal', function (e) {
        let id = $(e.relatedTarget).data('laptop');
        $.ajax({
            type: "post",
            url: "ajax/specificationlaptop.php",
            data: "laptop_id="+id,
            // dataType: "dataType",
            success: function (response) {
                $('#specificationt').html(response);
            }
        });
    });
});