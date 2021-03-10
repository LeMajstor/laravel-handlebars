<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Index;
use App\Models\Citation;

class CitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // New index Model
        $citation = new Citation();
        
        $items = [
            "Mussum Ipsum, cacilds vidis litro abertis. Mé faiz elementum girarzis, nisi eros vermeio. Si num tem leite então bota uma pinga aí cumpadi! Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Sapien in monti palavris qui num significa nadis i pareci latim.",
            "Manduma pindureta quium dia nois paga. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Aenean aliquam molestie leo, vitae iaculis nisl. A ordem dos tratores não altera o pão duris.",
            "Leite de capivaris, leite de mula manquis sem cabeça. Interagi no mé, cursus quis, vehicula ac nisi. Copo furadis é disculpa de bebadis, arcu quam euismod magna. Em pé sem cair, deitado sem dormir, sentado sem cochilar e fazendo pose.",
            "Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Paisis, filhis, espiritis santis. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.",
            "Delegadis gente finis, bibendum egestas augue arcu ut est. Quem num gosta di mé, boa gentis num é. Suco de cevadiss deixa as pessoas mais interessantis. Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis.",
            "Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Atirei o pau no gatis, per gatis num morreus. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Pra lá , depois divoltis porris, paradis.",
            "Quem manda na minha terra sou euzis! Detraxit consequat et quo num tendi nada. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis.",
            "In elementis mé pra quem é amistosis quis leo. Quem num gosta di mim que vai caçá sua turmis! Vehicula non. Ut sed ex eros. Vivamus sit amet nibh non tellus tristique interdum. Não sou faixa preta cumpadi, sou preto inteiris, inteiris.",
            "Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Viva Forevis aptent taciti sociosqu ad litora torquent. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Cevadis im ampola pa arma uma pindureta.",
            "Diuretics paradis num copo é motivis de denguis. Per aumento de cachacis, eu reclamis. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Casamentiss faiz malandris se pirulitá.",
        ];

        $index = new Index;
        $index = $index->get()->first();

        foreach($items as $item)
        {           
            $citation = new Citation;
            $citation->citation = $item;
            
            // Save content
            $index->citations()->save($citation);
        }
    }
}
