
function printResult(datas) {

    var Html = "<h3>Citações favoritas de {{name}}</h3><ol>{{#each quotes}}<li>{{quote}}{{/each}}</ol>{{{bio}}}<br><br><a href=" + datas.href + ">" + datas.link + "</a>"
    var template = Handlebars.compile(Html);
    var HtmlContent = template({
        name: datas.name,
        quotes: getItems(datas.citations),
        bio: datas.bio,
        link: datas.link,
        href: datas.href

    });
    $("#contentData").html(HtmlContent);
}

function getItems(items) {
    var quotes = [];
    for (var i = 0; i < items.length; i++) {
        quotes.push({ quote: items[i].citation })
    }
    return quotes;
}
