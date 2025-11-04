<x-app-layout>
    <x-content-wrapper class="flex gap-4">
        <x-content-wrapper class="w-full">
            <div class="flex w-full justify-between">
                <div class="flex gap-4">
                    <div class="relative">
                        <svg width="18" height="23" viewBox="0 0 18 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.8909 2.39129H13.5073V1.59419C13.506 1.17178 13.3382 0.767019 13.0404 0.468322C12.7427 0.169626 12.3392 0.00126159 11.9182 0H5.56182C5.14075 0.00126159 4.73729 0.169626 4.43955 0.468322C4.14181 0.767019 3.97398 1.17178 3.97273 1.59419V2.39129H1.58909C1.16802 2.39255 0.764563 2.56092 0.466823 2.85961C0.169083 3.15831 0.00125755 3.56307 0 3.98549V20.7245C0.00125755 21.1469 0.169083 21.5517 0.466823 21.8504C0.764563 22.1491 1.16802 22.3175 1.58909 22.3187H8.74V20.7245H1.58909V3.98549H3.97273V6.37678H13.5073V3.98549H15.8909V12.7536H17.48V3.98549C17.4787 3.56307 17.3109 3.15831 17.0132 2.85961C16.7154 2.56092 16.312 2.39255 15.8909 2.39129ZM11.9182 4.78258H5.56182V1.59419H11.9182V4.78258Z" fill="#A1A3AB"/>
                        </svg>
                        <i class="absolute right-[-50%] bottom-[-8px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.28473 7.19181L6.86206 6.37189V3.52332C6.86206 3.44313 6.83014 3.36624 6.77332 3.30954C6.71651 3.25284 6.63945 3.22099 6.5591 3.22099C6.47875 3.22099 6.4017 3.25284 6.34488 3.30954C6.28806 3.36624 6.25615 3.44313 6.25615 3.52332V6.54664C6.25615 6.59971 6.27015 6.65184 6.29674 6.6978C6.32333 6.74376 6.36157 6.78192 6.40762 6.80845L7.98178 7.71545C8.01612 7.73553 8.05412 7.7486 8.09357 7.7539C8.13302 7.7592 8.17313 7.75663 8.21158 7.74634C8.25002 7.73604 8.28603 7.71823 8.31752 7.69393C8.34901 7.66964 8.37535 7.63934 8.39501 7.6048C8.43523 7.53543 8.44621 7.45297 8.42553 7.37552C8.40486 7.29808 8.35421 7.23201 8.28473 7.19181ZM6.5591 0.5C3.21266 0.5 0.5 3.20708 0.5 6.54664C0.5 9.88619 3.21266 12.5933 6.5591 12.5933C9.90373 12.5896 12.6146 9.88438 12.6182 6.54664C12.6182 3.20708 9.90554 0.5 6.5591 0.5ZM6.5591 11.9886C5.84298 11.9886 5.13387 11.8478 4.47226 11.5744C3.81064 11.3009 3.20949 10.9 2.70311 10.3947C2.19674 9.88936 1.79506 9.28944 1.52101 8.62919C1.24696 7.96894 1.10591 7.26129 1.10591 6.54664C1.10591 5.83199 1.24696 5.12433 1.52101 4.46408C1.79506 3.80383 2.19674 3.20391 2.70311 2.69858C3.20949 2.19325 3.81064 1.79239 4.47226 1.51891C5.13387 1.24542 5.84298 1.10466 6.5591 1.10466C8.00489 1.10626 9.391 1.68013 10.4133 2.70035C11.4356 3.72057 12.0107 5.10383 12.0123 6.54664C12.0123 7.98994 11.4378 9.37412 10.4151 10.3947C9.39242 11.4153 8.00538 11.9886 6.5591 11.9886Z" fill="#888888" stroke="#A1A3AB"/>
                            </svg>
                        </i>
                    </div>
                    <h6 class="font-medium text-red-400">To-Do</h6>
                </div>
                <a href="{{ route('task.create') }}" class="flex gap-1 items-center">
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.0595 6.19048H6.19048V10.0595C6.19048 10.2648 6.10895 10.4616 5.96383 10.6067C5.81871 10.7518 5.62189 10.8333 5.41667 10.8333C5.21144 10.8333 5.01462 10.7518 4.8695 10.6067C4.72438 10.4616 4.64286 10.2648 4.64286 10.0595V6.19048H0.773809C0.568582 6.19048 0.371761 6.10895 0.226644 5.96383C0.0815263 5.81872 0 5.62189 0 5.41667C0 5.21144 0.0815263 5.01462 0.226644 4.8695C0.371761 4.72438 0.568582 4.64286 0.773809 4.64286H4.64286V0.77381C4.64286 0.568582 4.72438 0.371761 4.8695 0.226643C5.01462 0.0815259 5.21144 0 5.41667 0C5.62189 0 5.81871 0.0815259 5.96383 0.226643C6.10895 0.371761 6.19048 0.568582 6.19048 0.77381V4.64286H10.0595C10.2648 4.64286 10.4616 4.72438 10.6067 4.8695C10.7518 5.01462 10.8333 5.21144 10.8333 5.41667C10.8333 5.62189 10.7518 5.81872 10.6067 5.96383C10.4616 6.10895 10.2648 6.19048 10.0595 6.19048Z" fill="#F24E1E"/>
                    </svg>
                    <span class="text-zinc-400 text-xs">Add task</span>
                </a>
            </div>
            <div class="mt-5 text-xs">
                <span>{{ date('d F') }}</span>
                <span class="text-zinc-400 inline-block ml-3 relative pl-2">
                    <i class="absolute w-1 h-1 bg-zinc-400 rounded-full left-0 -translate-y-1/2 top-1/2"></i>
                    Today
                </span>
            </div>
            <div class="flex flex-col mx-2 my-4 gap-2">
                @if(count($todayTasks))
                    @foreach($todayTasks as $task)
                        <x-task :task="$task" />
                    @endforeach
                @else
                    All tasks are completed for today!
                @endif
            </div>
            <div class="bg-zinc-400 opacity-40 w-full h-px"></div>
            <div class="mt-5 text-xs">
                <span>{{ \Carbon\Carbon::create('tomorrow')->format('d F') }}</span>
                <span class="text-zinc-400 inline-block ml-3 relative pl-2">
                    <i class="absolute w-1 h-1 bg-zinc-400 rounded-full left-0 -translate-y-1/2 top-1/2"></i>
                    Tomorrow
                </span>
            </div>
            <div class="flex flex-col mx-2 my-4 gap-2">
                @if(count($tomorrowTasks))
                    @foreach($tomorrowTasks as $task)
                        <x-task :task="$task" />
                    @endforeach
                @else
                    There are no tasks for tomorrow!
                @endif
            </div>
        </x-content-wrapper>
        <div class="w-full">
            <x-content-wrapper>
                <div class="flex gap-4">
                    <div class="relative">
                        <svg width="18" height="23" viewBox="0 0 18 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.8909 2.39129H13.5073V1.59419C13.506 1.17178 13.3382 0.767019 13.0404 0.468322C12.7427 0.169626 12.3392 0.00126159 11.9182 0H5.56182C5.14075 0.00126159 4.73729 0.169626 4.43955 0.468322C4.14181 0.767019 3.97398 1.17178 3.97273 1.59419V2.39129H1.58909C1.16802 2.39255 0.764563 2.56092 0.466823 2.85961C0.169083 3.15831 0.00125755 3.56307 0 3.98549V20.7245C0.00125755 21.1469 0.169083 21.5517 0.466823 21.8504C0.764563 22.1491 1.16802 22.3175 1.58909 22.3187H8.74V20.7245H1.58909V3.98549H3.97273V6.37678H13.5073V3.98549H15.8909V12.7536H17.48V3.98549C17.4787 3.56307 17.3109 3.15831 17.0132 2.85961C16.7154 2.56092 16.312 2.39255 15.8909 2.39129ZM11.9182 4.78258H5.56182V1.59419H11.9182V4.78258Z" fill="#A1A3AB"/>
                        </svg>
                        <i class="absolute right-[-50%] bottom-0">
                            <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.68 6.12835L1.2972 3.71979L0 5.03101L3.68 8.7508L11.04 1.31122L9.7428 0L3.68 6.12835Z" fill="#A1A3AB"/>
                            </svg>
                        </i>
                    </div>
                    <h6 class="font-medium text-red-400">Task Status</h6>
                </div>
                <div class="mt-5 flex justify-between">
                    <x-progress-circle progress="{{ $completedTodayTasks / $totalTodayTasks * 100 }}" color="#0225FF">
                        <x-slot name="value">{{ $completedTodayTasks }} / {{ $totalTodayTasks }}</x-slot>
                        <x-slot name="label">Completed today</x-slot>
                    </x-progress-circle>
                    <x-progress-circle progress="{{ $completedTotalTasks / $totalTasks * 100 }}" color="#05A301">
                        <x-slot name="value">{{ $completedTotalTasks }} / {{ $totalTasks }}</x-slot>
                        <x-slot name="label">Completed total</x-slot>
                    </x-progress-circle>
                    <x-progress-circle progress="{{ $expiredTotalTasks / $totalTasks * 100 }}" color="#F21E1E">
                        <x-slot name="value">{{ $expiredTotalTasks }}</x-slot>
                        <x-slot name="label">Expired tasks</x-slot>
                    </x-progress-circle>
                </div>
            </x-content-wrapper>
            <x-content-wrapper class="mt-4">
                <div class="flex gap-4">
                    <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.33333 24H18.6667C19.9535 24 21 22.9236 21 21.6V3.6C21 2.2764 19.9535 1.2 18.6667 1.2H16.3333C16.3333 0.88174 16.2104 0.576515 15.9916 0.351472C15.7728 0.126428 15.4761 0 15.1667 0H5.83333C5.52391 0 5.22717 0.126428 5.00838 0.351472C4.78958 0.576515 4.66667 0.88174 4.66667 1.2H2.33333C1.0465 1.2 0 2.2764 0 3.6V21.6C0 22.9236 1.0465 24 2.33333 24ZM2.33333 3.6H4.66667V6H16.3333V3.6H18.6667V21.6H2.33333V3.6Z" fill="#A1A3AB"/>
                        <path d="M9.68093 14.1479L7.62296 11.7144L6 13.6335L9.68093 17.9861L15.6574 10.9191L14.0345 9L9.68093 14.1479Z" fill="#A1A3AB"/>
                    </svg>
                    <h6 class="font-medium text-red-400">Completed Tasks</h6>
                </div>
                <div class="flex flex-col mx-2 my-4 gap-2">
                    @if(count($lastCompletedTasks))
                        @foreach($lastCompletedTasks as $task)
                            <x-task :task="$task" />
                        @endforeach
                    @else
                        Tou haven't completed any task yet!
                    @endif
                </div>
            </x-content-wrapper>
        </div>
    </x-content-wrapper>
</x-app-layout>
