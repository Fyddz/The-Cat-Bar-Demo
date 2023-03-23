<div>
    @if($selected)
        <a href="{{$link}}" class="flex items-center justify-start w-full p-4 my-2 font-thin text-blue-500 uppercase transition-colors duration-200 border-r-4 border-blue-500 bg-gradient-to-r from-white to-blue-100 dark:from-gray-700 dark:to-gray-800">
            <span class="text-left">
                <i class="{{$icon}} "></i>
            </span>
            <span class="mx-4 text-sm font-normal">
                {{$title}}
            </span>
        </a>
    @else
        <a href="{{$link}}" class="flex items-center justify-start w-full p-4 my-2 font-thin text-gray-500 uppercase transition-colors duration-200 dark:text-gray-200 hover:text-blue-500">
            <span class="text-left">
                <i class="{{$icon}} "></i>
            </span>
            <span class="mx-4 text-sm font-normal">
                {{$title}}
            </span>
        </a>
    @endif

    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
</div>
