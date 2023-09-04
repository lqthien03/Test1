<div class="grid grid-cols-1 md:grid-cols-5 gap-8 md:gap-16">
    @foreach($categories as $category)
        <div
            class="max-w-sm flex flex-col justify-center p-6 min-h-[280px]  border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-8 md:mx-0">
            <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect width="60" height="60" rx="7.45763" fill="#FFFFFE" />
                <path d="M29.4798 49L16.0033 45.3013L13 12H46L42.9936 45.2962L29.4798 49Z" fill="#264DE4" />
                <path d="M40.4198 43.1759L42.9889 14.7228H29.5V46.1688L40.4198 43.1759Z" fill="#2965F1" />
                <path
                    d="M19.8849 27.0739L20.2551 31.1581H29.5001V27.0739H19.8849ZM19.1409 18.8073L19.5164 22.8915H29.5001V18.8073H19.1409ZM29.5001 37.6812L29.482 37.6859L24.881 36.4577L24.5869 33.2003H20.4397L21.0185 39.6133L29.4811 41.9357L29.5001 41.9306V37.6812Z"
                    fill="#EBEBEB" />
                <path
                    d="M39.0887 27.0739L39.8345 18.8073H29.4857V22.8915H35.307L34.9311 27.0739H29.4857V31.1581H34.5729L34.0933 36.4552L29.4856 37.6846V41.9338L37.9549 39.6133L38.017 38.9232L38.988 28.1706L39.0887 27.0739Z"
                    fill="white" />
            </svg>

            <a href="#"
                class="inline-flex items-center px-3 py-2 text-md text-center font-bold">
               {{$category->name }}
            </a>
        </div>
    @endforeach


    {{$categories->links()}}
</div>


