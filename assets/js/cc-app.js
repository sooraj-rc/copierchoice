/* 
 * JS for this website
 * 
 */
$(document).ready(function () {
    var current = 1;

    widget = $(".step");
    btnnext = $(".next");
    btnback = $(".back");
    btnsubmit = $(".submit");

    // Init buttons and UI
    widget.not(':eq(0)').hide();
    hideButtons(current);
    setProgress(current);

    // Next button click action
    btnnext.click(function () {
        if (current < widget.length) {
            // Check validation
            if ($(".form").valid()) {
                widget.show();
                widget.not(':eq(' + (current++) + ')').hide();
                setProgress(current);
            }
        }
        hideButtons(current);
    })

    // Back button click action
    btnback.click(function () {
        if (current > 1) {
            current = current - 2;
            if (current < widget.length) {
                widget.show();
                widget.not(':eq(' + (current++) + ')').hide();
                setProgress(current);
            }
        }
        hideButtons(current);
    })

    $('.form').validate({// initialize plugin
        ignore: ":not(:visible)",
        rules: {
           
        },
    });

});

// Change progress bar action
setProgress = function (currstep) {
    var percent = parseFloat(100 / widget.length) * currstep;
    percent = percent.toFixed();
    $(".progress-bar").css("width", percent + "%").html(percent + "%");
}

// Hide buttons according to the current step
hideButtons = function (current) {
    var limit = parseInt(widget.length);

    $(".action").hide();

    if (current < limit)
        btnnext.show();
    if (current > 1)
        btnback.show();
    if (current == limit) {
        // Show entered values
        //alert("here");
        //$(".display label.lbl").each(function () {
            alert($("#" + $(this).data("id")).val());
            //$(this).html($("#" + $(this).data("id")).val());
        //});
        btnnext.hide();
        btnsubmit.show();
    }
}


// LEAD TYPE SELECTION
$(".next1").click(function(){
   var value = $('input:radio[name=qtype1]:checked').val();
   //alert(value);
   if(value == 1){
        $("#3rdqn").css("display","none");
        $("#2ndqn").css("display","block");       
   }
   else if(value == 2){
        $("#2ndqn").css("display","none");
        $("#3rdqn").css("display","block");       
   }
   else if(value == 3){
        $("#2ndqn").css("display","none");
        $("#3rdqn").css("display","none");       
   }
});
$("#continue").click(function(e){
    var value1 = $('input:radio[name=qtype1]:checked').val();
    var value2 = $('input:radio[name=qtype2]:checked').val();
    var value = value1+value2;
    var type_id;
    /*  
     *  1-1 => 1
     *  1-2 => 2
     *  1-3 => 3
     *  1-4 => 4
    */
    if(value == 11)
        type_id = 1;
    else if(value == 12)
        type_id = 2;
    else if(value == 13)
        type_id = 3;
    else if(value == 14)
        type_id = 4;
    else if(value == 21)
        type_id = 5;
    else if(value == 22)
        type_id = 6;
    else if(value == 23)
        type_id = 7;
    else 
        type_id = 8;
    //alert(type_id);
    e.preventDefault();
    path = $("#base_url").val()+"getquote/"+type_id;
    //alert(path);
    if(type_id == 1)
        $('#first_form').attr('action', path).submit();
    else
        alert("Sorry! We are preparing question. Only avalable in first options of first questions.");
        
});


//-------- script for multi form submission ---------
//$(document).ready(function () {
//    var current = 1;
//
//    widget = $(".step");
//    btnnext = $(".next");
//    btnback = $(".back");
//    btnsubmit = $(".submit");
//
//    // Init buttons and UI
//    widget.not(':eq(0)').hide();
//    hideButtons(current);
//    setProgress(current);
//
//    // Next button click action
//    btnnext.click(function () {
//        if (current < widget.length) {
//            // Check validation
//            if ($(".form").valid()) {
//                widget.show();
//                widget.not(':eq(' + (current++) + ')').hide();
//                setProgress(current);
//            }
//        }
//        hideButtons(current);
//    })
//
//    // Back button click action
//    btnback.click(function () {
//        if (current > 1) {
//            current = current - 2;
//            if (current < widget.length) {
//                widget.show();
//                widget.not(':eq(' + (current++) + ')').hide();
//                setProgress(current);
//            }
//        }
//        hideButtons(current);
//    })
//
//    $('.form').validate({// initialize plugin
//        ignore: ":not(:visible)",
//        rules: {
//            name: "required",
//            email: {required: true, email: true},
//            country: "required",
//            qtype: "required",
//            dtype: "required",
//            condition: "required",
//            //rpassword: {required: true, equalTo: "#password"},
//            color:"required",
//        },
//    });
//
//});
//
//// Change progress bar action
//setProgress = function (currstep) {
//    var percent = parseFloat(100 / widget.length) * currstep;
//    percent = percent.toFixed();
//    $(".progress-bar").css("width", percent + "%").html(percent + "%");
//}
//
//// Hide buttons according to the current step
//hideButtons = function (current) {
//    var limit = parseInt(widget.length);
//
//    $(".action").hide();
//
//    if (current < limit)
//        btnnext.show();
//    if (current > 1)
//        btnback.show();
//    if (current == limit) {
//        // Show entered values
//        //alert("here");
//        $(".display label.lbl").each(function () {
//            //alert($("#" + $(this).data("id")).val());
//            $(this).html($("#" + $(this).data("id")).val());
//        });
//        btnnext.hide();
//        btnsubmit.show();
//    }
//}

//---------- end script for multi form submission ----------------


