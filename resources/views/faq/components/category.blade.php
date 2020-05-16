<div class="mt-10">
    <h2 class="text-2xl font-bold text-blue-600">
        <a name="{{ $category->slug }}"></a>{{ $category->name }}
    </h2>
    @foreach($category->faqs as $faq)
        @include('faq/components/question', ['question' => $faq])
    @endforeach
</div>
