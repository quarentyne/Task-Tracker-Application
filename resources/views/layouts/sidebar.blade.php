<aside class="max-w-[330px] w-full sticky max-h-[calc(100vh-9.75rem)] top-[9.75rem]">
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
                        <path d="M13.3333 8V0H24V8H13.3333ZM0 13.3333V0H10.6667V13.3333H0ZM13.3333 24V10.6667H24V24H13.3333ZM0 24V16H10.6667V24H0Z"/>
                    </svg>
                    <span class="inline-block ml-4">Dashboard</span>
                </x-nav-link>
                <x-nav-link
                    href="{{ route('task.list') }}"
                    active="{{ request()->routeIs('task.list') }}">
                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.65329 19.7143H24V21.4286H9.65329V19.7143ZM2.65414 20.5714L0.0102479 22.7829L1.45517 24L5.55423 20.5714L1.45517 17.1429L0 18.3514L2.65414 20.5714ZM9.65329 11.1429H24V12.8571H9.65329V11.1429ZM2.65414 12L0.0102479 14.2114L1.45517 15.4286L5.55423 12L1.45517 8.57143L0 9.78L2.65414 12ZM9.65329 2.57143H24V4.28571H9.65329V2.57143ZM2.65414 3.42857L0.0102479 5.64L1.45517 6.85714L5.55423 3.42857L1.45517 0L0 1.20857L2.65414 3.42857Z">
                    </svg>
                    <span class="inline-block ml-4">My Tasks</span>
                </x-nav-link>
                <x-nav-link
                    href="{{ route('categories.list') }}"
                    active="{{ request()->routeIs('categories.list') }}">
                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 22H19C20.103 22 21 21.103 21 20V5C21 3.897 20.103 3 19 3H17C17 2.73478 16.8946 2.48043 16.7071 2.29289C16.5196 2.10536 16.2652 2 16 2H8C7.73478 2 7.48043 2.10536 7.29289 2.29289C7.10536 2.48043 7 2.73478 7 3H5C3.897 3 3 3.897 3 5V20C3 21.103 3.897 22 5 22ZM5 5H7V7H17V5H19V20H5V5Z" />
                        <path d="M11 13.586L9.20697 11.793L7.79297 13.207L11 16.414L16.207 11.207L14.793 9.79297L11 13.586Z"/>
                    </svg>
                    <span class="inline-block ml-4">Task Categories</span>
                </x-nav-link>
                <x-nav-link
                    href="{{ route('profile.edit') }}"
                    active="{{ request()->routeIs('profile.edit') }}">
                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.71642 24L8.23881 20.16C7.9801 20.06 7.73612 19.94 7.50687 19.8C7.27761 19.66 7.05393 19.51 6.83582 19.35L3.28358 20.85L0 15.15L3.07463 12.81C3.05473 12.67 3.04478 12.5348 3.04478 12.4044V11.5956C3.04478 11.4652 3.05473 11.33 3.07463 11.19L0 8.85L3.28358 3.15L6.83582 4.65C7.05473 4.49 7.28358 4.34 7.52239 4.2C7.76119 4.06 8 3.94 8.23881 3.84L8.71642 0H15.2836L15.7612 3.84C16.0199 3.94 16.2639 4.06 16.4931 4.2C16.7224 4.34 16.9461 4.49 17.1642 4.65L20.7164 3.15L24 8.85L20.9254 11.19C20.9453 11.33 20.9552 11.4652 20.9552 11.5956V12.4044C20.9552 12.5348 20.9353 12.67 20.8955 12.81L23.9701 15.15L20.6866 20.85L17.1642 19.35C16.9453 19.51 16.7164 19.66 16.4776 19.8C16.2388 19.94 16 20.06 15.7612 20.16L15.2836 24H8.71642ZM12.0597 16.2C13.2139 16.2 14.199 15.79 15.0149 14.97C15.8308 14.15 16.2388 13.16 16.2388 12C16.2388 10.84 15.8308 9.85 15.0149 9.03C14.199 8.21 13.2139 7.8 12.0597 7.8C10.8856 7.8 9.89532 8.21 9.08896 9.03C8.28259 9.85 7.8798 10.84 7.8806 12C7.8806 13.16 8.28338 14.15 9.08896 14.97C9.89453 15.79 10.8848 16.2 12.0597 16.2Z"/>
                    </svg>
                    <span class="inline-block ml-4">Settings</span>
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
