$('#button').click(function() {
    $.ajax({
        url: "expression.txt",
        type: "GET",
        dataType: "text",
        success: function(data) {
            $('body').append(data);
        }
    })
})