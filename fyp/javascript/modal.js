$(function () {
    $('#specificationtable').on('show.bs.modal', function (e) {
        let id = $(e.relatedTarget).data('mobile');
        $.ajax({
            type: "post",
            url: "ajax/specification.php",
            data: "mobile_id="+id,
            // dataType: "dataType",
            success: function (response) {
                $('#specificationt').html(response);
            }
        });
    });
});