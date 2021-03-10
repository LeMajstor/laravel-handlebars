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

function printResult(datas) {
    console.log(datas);
}


// var quotesTemplate = "<h3>Citações favoritas de {{ name }}</h3><ol>{{#each quotes}}<li>{{quote}}{{/each}}</ol>{{{bio}}}<br>{{ createLink 'Custom Link' 'https://www.google.com.br/' }}";
// var template = Handlebars.compile(quotesTemplate);

// Handlebars.registerHelper("createLink", function(text, href){
//     text = Handlebars.Utils.escapeExpression(text);
//     href = Handlebars.Utils.escapeExpression(href);
//     var theHref = "<a href = " + href + ">" + text + "</a>";
//     return new Handlebars.SafeString(theHref); 
// });

// var quoteData = template({
//     name: 'Edinaldo',
//     quotes: [
//         {quote: "Lorem Ipsum"},
//         {quote: "Dolor Sit Amet"},
//         {quote: "Consecteur Adis Lip"},
//     ],
//     bio: "<i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis tortor justo, id egestas neque sagittis eu. Praesent luctus ac elit quis dapibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed non quam eu erat auctor pretium tristique vel tellus. Praesent facilisis, enim in aliquet fermentum, quam risus faucibus sem, id rhoncus ligula nisi congue arcu. Curabitur id consectetur eros. Aliquam eget metus lorem. Etiam volutpat, diam eget bibendum luctus, odio odio faucibus lorem, quis aliquet mauris nisl nec quam. Curabitur at enim lobortis, lobortis mauris vel, maximus leo. Etiam nec magna id nulla feugiat sodales. Praesent lacinia fermentum rutrum. Mauris vel tortor ac leo sollicitudin cursus quis commodo purus. Donec et suscipit erat. Phasellus luctus pulvinar dui quis maximus.</i>"
// });



// $("#contentData").html(quoteData);

