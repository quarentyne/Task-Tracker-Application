<aside class="max-w-[330px] w-full pt-14 sticky max-h-[calc(100vh-100px)] top-[100px]">
    <div class="bg-red-400 h-full relative rounded-r-lg flex flex-col">
        <div class="relative flex flex-col w-full items-center top-[-44px] text-white mb-5">
            <div class="rounded-full bg-white w-22 h-22 border-2 border-white mb-3">
                <img class="rounded-full" src="https://placehold.co/86x86" alt="User logo"/>
            </div>
            <span class="font-semibold">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</span>
            <span class="text-xs">{{ auth()->user()->email }}</span>
        </div>
        <div class="flex flex-col px-5 pb-12 w-full flex-1 justify-between">
            <nav class="flex flex-col gap-3 w-full">
                <x-nav-link
                    href="{{ route('dashboard') }}"
                    active="{{ request()->routeIs('dashboard') }}">
                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.3333 8V0H24V8H13.3333ZM0 13.3333V0H10.6667V13.3333H0ZM13.3333 24V10.6667H24V24H13.3333ZM0 24V16H10.6667V24H0Z"
                              "/>
                    </svg>
                    <span class="inline-block ml-4">Dashboard</span>
                </x-nav-link>
                <x-nav-link
                    href="{{ route('categories.list') }}"
                    active="{{ request()->routeIs('categories.list') }}">
                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 22H19C20.103 22 21 21.103 21 20V5C21 3.897 20.103 3 19 3H17C17 2.73478 16.8946 2.48043 16.7071 2.29289C16.5196 2.10536 16.2652 2 16 2H8C7.73478 2 7.48043 2.10536 7.29289 2.29289C7.10536 2.48043 7 2.73478 7 3H5C3.897 3 3 3.897 3 5V20C3 21.103 3.897 22 5 22ZM5 5H7V7H17V5H19V20H5V5Z" />
                        <path d="M11 13.586L9.20697 11.793L7.79297 13.207L11 16.414L16.207 11.207L14.793 9.79297L11 13.586Z"
                              "/>
                    </svg>
                    <span class="inline-block ml-4">Task Categories</span>
                </x-nav-link>
            </nav>
            <form method="POST" action="{{ route('logout') }}" class="relative bottom-0">
                @csrf
                <button type="submit" class="w-full inline-flex items-center p-4 border-transparent rounded-xl font-medium text-white hover:text-red-400 hover:fill-red-400 hover:bg-white transition duration-150 ease-in-out">
                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.6667 6.66667L16.8 8.53333L18.9333 10.6667H8V13.3333H18.9333L16.8 15.4667L18.6667 17.3333L24 12L18.6667 6.66667ZM2.66667 2.66667H12V0H2.66667C1.2 0 0 1.2 0 2.66667V21.3333C0 22.8 1.2 24 2.66667 24H12V21.3333H2.66667V2.66667Z"/>
                    </svg>
                    <span class="inline-block ml-4">Logout</span>
                </button>
            </form>
        </div>
    </div>
</aside>
