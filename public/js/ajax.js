// Get Url Base for AJAX
var baseUrl = $("#contentData").data("route");

// AJAX Request
$.ajax({
    url: baseUrl,
    method: 'GET',
    success: function(data) {
        printResult(data);
    },
    error: function(data) {
        console.log('error: ' + data);
    }
});