function validateForm() {
    "use strict";
    let err = true;

    const name = $("#name").val();
    const email = $("#email").val();
    const message = $("#message").val();

    if (!name) {
        $("#name").addClass("validation");
        err = false;
    } else {
        $("#name").removeClass("validation");
    }

    if (!(/(.+)@(.+){2,}\.(.+){2,}/.test(email))) {
        $("#email").addClass("validation");
        err = false;
    } else {
        $("#email").removeClass("validation");
    }

    if (!message) {
        $("#message").addClass("validation");
        err = false;
    } else {
        $("#message").removeClass("validation");
    }

    return err;
}

$(document).ready(function () {
    "use strict";

    $("#button").click(function (e) {
        e.preventDefault();

        if (validateForm()) {
            $.ajax({
                type: "POST",
                url: "/send-message", // Laravel route
                data: $("#form1").serialize(),
                headers: {
                    "X-CSRF-TOKEN": $('input[name="_token"]').val()
                },
                success: function (response) {
                    $("#successmsg").html(
                        `<p style="color: green;">Message sent successfully!</p>`
                    );
                    $("#form1")[0].reset();
                },
                error: function (xhr) {
                    $("#successmsg").html(
                        `<p style="color: red;">Failed to send message. Please try again.</p>`
                    );
                }
            });
        }
    });
});
