<section id="post" class="bg-white py-8">    
    <div class="px-2 py-2" style="width:400px;">
    <form wire:submit="searching">
        <div class="flex">
            
    <select name="" id="" wire:model="search" class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
        <option value="">Danh Mục</option>
        @foreach ($Category as $item )
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
            
            <div class="relative w-full">
                <input type="search" wire:model="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Tìm Kiếm" >
                <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </div>
    </form>

        {{--  --}}
    </div>
    
    <div class="container mx-auto">
        <div class="flex items-center justify-between py-4">
            <p class="capitalize font-medium mx-2 md:mx-0 text-md md:text-lg flex items-center gap-2">
                Feature Article
                <svg width="35" height="3" viewBox="0 0 35 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="1.5" x2="35" y2="1.5" stroke="#2B2C34" stroke-width="2" />
                </svg>

            </p>
            <a href="#" class="capitalize font-medium mx-2 md:mx-0 text-md md:text-lg flex items-center gap-2">
                see all category
                <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.20286 14.8762L1.20289 14.8762C1.38024 15.0487 1.60745 15.1472 1.84632 15.1482C2.00583 15.1585 2.16435 15.1248 2.30882 15.0513C2.45467 14.977 2.58112 14.8647 2.67935 14.7256C2.67938 14.7256 2.67941 14.7256 2.67943 14.7255L6.92897 8.7391L6.92952 8.7383C7.07328 8.53299 7.15 8.2786 7.15 8.01867C7.15 7.759 7.07343 7.50486 6.92994 7.29965C6.9298 7.29945 6.92966 7.29924 6.92952 7.29904L2.8264 1.31541C2.74574 1.19001 2.64284 1.08361 2.523 1.00411C2.40239 0.924097 2.26749 0.873279 2.12675 0.856304C1.98594 0.839321 1.84397 0.856788 1.71023 0.907014C1.57765 0.956802 1.457 1.0373 1.35508 1.1419C1.25423 1.23763 1.17161 1.35441 1.11088 1.4849C1.04965 1.61647 1.01156 1.76006 0.998201 1.90747C0.984842 2.0549 0.9964 2.20409 1.0324 2.34672C1.06836 2.48922 1.12823 2.62317 1.20942 2.74062C1.20949 2.74071 1.20955 2.74081 1.20962 2.7409L4.82179 8.01204L1.07479 13.2748L1.07467 13.275C0.992198 13.3912 0.930867 13.5241 0.893308 13.666C0.855747 13.8078 0.842478 13.9566 0.85405 14.1039C0.865622 14.2513 0.901876 14.3952 0.961295 14.5274C1.02071 14.6597 1.10246 14.7785 1.20286 14.8762Z"
                        fill="#2B2C34" stroke="#2B2C34" stroke-width="0.3" />
                </svg>

            </a>
        </div>
       
        <div class="grid grid-cols-1 md:grid-cols-4 mx-4 md:mx-0 gap-8 py-8 p-2">
            @foreach($Products as $Product)
                <div class="max-w-sm bg-white dark:bg-gray-800 dark:border-gray-700"  >
                    <a href="#">
                        <img class="rounded-lg" src="{{$Product->images}}"
                            alt="" />
                    </a>
                    <div class="py-4">
                        <a href="#">
                            <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{$Product->name}}
                            </h3>
                        </a>
                        <div class="flex items-center space-x-4 py-4 w-full">
                            <div class="font-medium dark:text-white w-44">
                                <div>{{$Product->price}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
       
    </div>
</section>
