
function printResult(datas) {

    var Html = "<article>{{{content}}}</article>"
    var template = Handlebars.compile(Html);
    var HtmlContent = template({
        title: datas.title,
        route: concatenateRoute(datas.id),
        content: datas.content,
    });
    $("#contentData").html(HtmlContent);
}

function concatenateRoute(id) {
    // Recover absolute URL
    var getUrl = window.location;
    var requestRoute = getUrl.protocol + "//" + getUrl.host;
    var route = requestRoute += "/post/" + id;
    return route;
}
