$(document).ready(function () {
    $("body").delegate("table.apimodule button.delete", "click", function () {
        var data = { "device_token": $( this ).data("device_token") };
        var tr = $(this).closest("tr");
        $.ajax({
            type: "POST",
            url: $("input.delete_action").val(),
            data: data,
            success: function (response) {
                if (response.status == 'success') {
                    tr.remove();
                    $("div.deleted").css("display", "block").hide(5000);
                } else if (response.status == 'error') {
                    $("div.not_deleted").css("display", "block").hide(5000);
                }
            },
            error: function (response) {
            },
            dataType: 'json'
        });
    });
});
