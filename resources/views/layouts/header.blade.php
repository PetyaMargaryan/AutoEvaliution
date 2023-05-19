<div class="w-full m-0 p-0 bg-cover bg-bottom pb-[8vw]"
     style="background-image:url({{ url('/images/cover.jpg') }});">
    <div class="container max-w-7xl mx-auto pt-16 md:pt-12 text-center break-normal">
        <!--Title-->
        <p class="text-white font-extrabold text-3xl md:text-5xl">
            🚘 Auto<span class="text-[#ff0000]">e</span>volution
        </p>
        <div class="w-100 flex flex-wrap justify-between pt-10">
            @foreach($brandsList as $key => $brands)
                <div class="relative">
                    <button class="rounded-full w-[40px] h-[40px] m-1 text-lg font-bold
                    flex justify-center items-center brand-abc
                    {{ $selectedBrand && $selectedBrand[0] === $key ? 'bg-[#ff0000] text-white' : 'bg-white' }}"
                    data-keyword="{{$key}}"
                    >
                        {{ $key }}
                    </button>
                    <div id="brands-list-{{$key}}"
                        class="hidden min-w-[170px] p-5 bg-white absolute brands-list border max-h-60
                        overflow-x-hidden overflow-y-auto">
                        @foreach($brands as $brand)
                            <a href="{{ url($brand) }}"
                               class="block w-100 py-2 hover:bg-red-500 hover:text-white rounded
                               {{ $selectedBrand && $selectedBrand === $brand ? 'text-[#ff0000]' : '' }}"
                            >
                                {{ $brand }}
                            </a>
                            <hr>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    $( document ).ready(function() {
       $('.brand-abc').click(function () {
           $('.brands-list').hide();
           $('#brands-list-' + $(this).attr('data-keyword')).show();
       })
    });
</script>
