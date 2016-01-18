
//Lead more details modal popup
$(".more").click(function(){
    $('#moreDetails').modal('show');
    $('#data-title').html("Lead: More details");
    var id              = $(this).attr("data-id");
    var from            = $(this).attr("data-from");
    var request_path    = admin_url+"viewmore/"+from+"/"+id;
    console.log(request_path);
    $.post(request_path,function(data){
        $("#data-output").html(data);
    });
});