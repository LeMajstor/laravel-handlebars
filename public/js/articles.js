
function printResult(datas) {

    var Html = "<h3>Artigos por: {{name}}</h3><ul>{{#each articles}}<li><a href='{{id}}'>{{title}}</a></li>{{/each}}</ul>"
    var template = Handlebars.compile(Html);
    var HtmlContent = template({
        name: datas.name,
        articles: getItems(datas.posts),
    });
    $("#contentData").html(HtmlContent);
}

function getItems(items) {
    var data = [];
    for (var i = 0; i < items.length; i++) {
        data.push({ id: concatenateRoute(items[i].id), title: items[i].title })
    }
    return data;
}

function concatenateRoute(id) {
    // Recover absolute URL
    var getUrl = window.location;
    var requestRoute = getUrl.protocol + "//" + getUrl.host;
    var route = requestRoute += "/post/" + id;
    return route;
}
