$(document).ready(function() {
    $('.bg-success').on('click', function() {
        console.log("THis works");

        $.ajax({
            url: './module/upload2server/addAccount.php',
            method: 'POST',
            data : {
                'acc_code' : $('#acc_code').val(),
                'acc_name' : $('#acc_name').val(),
                'acc_parent' : $('#acc_parent').val(),                
                'acc_desc' : $('#acc_desc').val(),
                'acc_type' : $('#acc_type').val()
            }
        }).success(function() {        
                $('#addModal').modal('hide');

                window.location.reload(true);            
        });            
    });
            
});