
// Manage Handlebars for displaying results
function printResult(datas) {
    var htmlContent = "</p> Meu nome é {{ name }}, meu endereço é {{ address }} na cidade de {{ city }}, {{ state }}.</p>";
    var template = Handlebars.compile(htmlContent);
    for (var i = 0; i < datas.length; i++) {
        var data = datas[i];
        var content = template({
            name: data.name,
            address: data.address,
            city: data.city,
            state: data.state 
        })
        $("#contentData").html(content);
    }
}
