<x-layout>

    @include ('articles._header')
    <main class="max-w-7xl mx-auto mt-5 lg:mt-20 space-y-6">
<div>
        <div class=" hidden lg:inline px-2" style="float: right; margin-top: 0px;">
            <div class=" py-4 px-4 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <h3>{{__('Категорії:')}}</h3>
                <ul>
@foreach(\App\Models\ArtCategory::all() as $category)

                    <li>  <a class="font-semibold text-black" href="/{{app()->getLocale()}}/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"  >
                            {{  __(ucwords($category->name))}}
                        </a>
                    </li>
                    @endforeach
    <li><a class="font-semibold text-black" href="/{{app()->getLocale()}}/calculator">{{ __('Калькулятори')}}</a></li>
                </ul>
            </div>
            <div class=" py-4 px-4 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <h3>{{__('Хештеги:')}}</h3>
                <ul>

                   @foreach( \App\Models\Hashtag::withCount('articles')->get() as $hashtag)
                        <li>  <a href="/{{app()->getLocale()}}/?hashtag={{ $hashtag->name }}&
                        {{ http_build_query(request()->except('hashtag', 'page')) }}"  >
                           @if(App::currentLocale()==='ua')
                                    #{{  __(ucwords($hashtag->name))}}
                        @else
                                    #{{  __(ucwords($hashtag->name_ru))}}

                           @endif
                        </a>    ({{ $hashtag->articles_count }})
                        </li>

                    @endforeach
                </ul>
            </div>
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9969651043683101"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-9969651043683101"
     data-ad-slot="5647528096"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
        </div>


        @if ($articles->count())

            <x-articles-grid :articles="$articles" />
            {{ $articles->links()}}
        @else
            <p class="text-center">{{  __("В даній категорії наразі немає товарів. Але трохи пізніше вони обов'язково з'являться:))")}}</p>
        @endif
</div>
    </main>

</x-layout>
