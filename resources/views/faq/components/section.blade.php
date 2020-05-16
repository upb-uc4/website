<div class="mt-10">
    <h2 class="text-2xl font-bold text-blue-600">{{ $title }}</h2>
    @include('faq/components/question', ['question' => "First Question in General?", 'answer' => "Bitcoin ist ein konsensorientiertes Netzwerk, welches ein neues Zahlungssystem und vollständig digitales Geld möglich macht.
        Es ist das erste dezentralisierte Peer-to-Peer Zahlungsnetzwerk, das nur von den Nutzern und ohne zentrale Autorität
        oder Vermittler betrieben wird"])

    @include('faq/components/question', ['question' => "Second Question in General?", 'answer' => "Bitcoin ist ein konsensorientiertes Netzwerk, welches ein neues Zahlungssystem und vollständig digitales Geld möglich macht.
        Es ist das erste dezentralisierte Peer-to-Peer Zahlungsnetzwerk, das nur von den Nutzern und ohne zentrale Autorität
        oder Vermittler betrieben wird"])
</div>
