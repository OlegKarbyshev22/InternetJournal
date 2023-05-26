@vite(['resources/css/app.css','resources/js/app.js'])
<footer class="bg-white dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="flex mx-auto justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="{{asset('images/logo.png')}}" class="h-32 mr-3" alt="FlowBite Logo" />

                </a>
            </div>
            <div class="grid ">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Дополнительная информация</h2>
                    <ul class="text-gray-600 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">О НАС</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Лицензия</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
          </span>
            <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                <a href="https://vk.com/legys1" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <img src="{{asset('images/vk_logo.png')}}"  class="h-8" alt="">
                </a>
                <a href="https://github.com/OlegKarbyshev22" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <img src="{{asset('images/github_logo.png')}}" class="h-8" alt="">
                </a>
                <a href="https://discordapp.com/users/393005888233013259" target="_blank" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <img src="{{asset('images/discord_logo.png')}}" class="h-8" alt="">
                </a>
            </div>
        </div>
    </div>
</footer>
