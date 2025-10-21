<header class="sticky top-0 z-30 flex w-full pl-5 lg:pl-0 pr-5 py-5">
    <div class="flex w-full rounded-3xl border border-gray-200 bg-white lg:border-b">
        <div class="flex grow items-center justify-between lg:px-6">
            <div class="w-full px-3 sm:gap-4 lg:px-0 lg:py-4 flex items-center">
                <div class="hamburger-menu lg:hidden block cursor-pointer mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00000"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
                </div>
                <h2 class="text-lg font-medium">{{$title}}</h2>
            </div>

            <div class="gap-4 px-5 py-4 lg:px-0">
                <a href="/auth/login" class="bg-red-400 px-6 py-2 rounded-2xl text-white font-medium">Logout</a>
            </div>
        </div>
    </div>
</header>