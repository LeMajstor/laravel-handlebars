
function printResult(datas) {

    var Html = "<h3>Artigos por: {{name}}</h3><ul>{{#each articles}}<li>{{article}}{{/each}}</ul>"
    var template = Handlebars.compile(Html);
    var HtmlContent = template({
        name: datas.name,
        articles: getItems(datas.posts),
    });
    $("#contentData").html(HtmlContent);
}

function getItems(items) {
    var articles = [];
    for (var i = 0; i < items.length; i++) {
        articles.push({ article: items[i].title })
    }
    return articles;
}
