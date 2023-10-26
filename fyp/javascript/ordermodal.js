$(function () {
    $('#orderdetail').on('show.bs.modal', function (e) {
        let id = $(e.relatedTarget).data('mobile');
        console.log('ghj');
        
        $.ajax({
            type: "post",
            url: "ajax/orderdetail.php",
            data: "mobile_id="+id,
            // dataType: "dataType",
            success: function (response) {
                console.log(response);
                
                $('#orderform').html(response);
            }
        });
    });
});