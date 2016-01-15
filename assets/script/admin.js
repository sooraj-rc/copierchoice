
$('#viewMore').on('show.bs.modal', function (e) {
    var id              = $(this).attr("data-id");
    var from            = $(this).attr("data-from");
    var request_path    = admin_url+"ajax/viewmore/"+from+"/"+id;
    $.post(request_path,function(data){
        $("#data-output").html(data);
    });
});