<main class="relative h-screen overflow-hidden bg-gray-100 dark:bg-gray-800">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="flex items-start justify-between">
        <div class="relative hidden h-screen my-4 ml-4 shadow-lg lg:block w-80">
            <div class="h-full bg-white rounded-2xl dark:bg-gray-700">
                <div class="flex items-center justify-center pt-6">
                    <img class="h-28 w-30 block" src="{!! asset('img/icon.png') !!}" alt="Your Company">
                </div>
                <nav class="mt-6">
                    <div>
                        <x-navigation title="Dashboard" :link="route('index')" :selected="request()->is('/')" icon="fa-solid fa-house"/>
                        <x-navigation title="Bars" :link="route('bars')" :selected="request()->is('bars')" icon="fa-solid fa-beer-mug-empty"/>
                        <x-navigation title="Chats" :link="route('bars')" :selected="request()->is('bars')" icon="fa-solid fa-beer-mug-empty"/>
                    </div>
                </nav>
            </div>
        </div>
        <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
            <header class="z-40 items-center w-full h-16 bg-white shadow-lg dark:bg-gray-700 rounded-2xl">
                <div class="relative z-20 flex flex-col justify-center h-full px-3 mx-auto flex-center">
                    <div class="relative flex items-center w-full pl-1 sm:pr-2 sm:ml-0">
                        <div class="container relative left-0 z-50 flex h-auto h-full">
                            <div class="relative flex justify-center items-center w-full h-full">
                                <h1 class="text-2xl text-gray-50">@yield('title')</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="h-screen pt-2 pb-24 pl-2 pr-2 overflow-auto md:pt-0 md:pr-0 md:pl-0">
                <div class="flex flex-col flex-wrap sm:flex-row ">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</main>
