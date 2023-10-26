$(function () {
    $('#orderdetaillaptop').on('show.bs.modal', function (e) {
        let id = $(e.relatedTarget).data('laptop');
        console.log('ghj');
        
        $.ajax({
            type: "post",
            url: "ajax/orderdetaillaptop.php",
            data: "laptop_id="+id,
            // dataType: "dataType",
            success: function (response) {
                console.log(response);
                
                $('#orderform').html(response);
            }
        });
    });
});