/* 
 * JS for this website
 * 
 */
//-------- script for multi form submission ---------
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
            name: "required",
            email: {required: true, email: true},
            country: "required",
            qtype: "required",
            dtype: "required",
            condition: "required",
            //rpassword: {required: true, equalTo: "#password"},
            color:"required",
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
        $(".display label.lbl").each(function () {
            //alert($("#" + $(this).data("id")).val());
            $(this).html($("#" + $(this).data("id")).val());
        });
        btnnext.hide();
        btnsubmit.show();
    }
}

//---------- end script for multi form submission ----------------


