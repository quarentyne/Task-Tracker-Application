<x-app-layout>
    @if (session('success'))
        <div x-data="" x-on:click="$el.remove()" class="alert alert-success mb-8 text-green-600 cursor-pointer">
            {{ session('success') }}
        </div>
    @endif
    <x-content-wrapper>
        <h1 class="text-2xl font-semibold">{{ $task->title }}</h1>
        <div class="mt-4">Status:
            @if($task->completed_at)
                <span class="text-green-600">Completed</span>
            @else
                <span class="text-red-600">Not Completed</span>
            @endif
        </div>
        <div class="mt-4 text-zinc-400 text-[10px]">Created on: {{ $task->created_at->format('d/m/Y H:i') }}</div>
        <div class="mt-8 text-neutral-500 leading-[1.2]">
            {{ $task->description }}
        </div>
        <div class="mt-8 flex justify-end">
            <div class="flex gap-3">
                <form method="post" action="{{ route('task.destroy', $task) }}">
                    @csrf
                    @method('delete')
                    <x-icon-button tag="button" type="submit">
                        <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 16C1 17.1 1.9 18 3 18H11C12.1 18 13 17.1 13 16V6C13 4.9 12.1 4 11 4H3C1.9 4 1 4.9 1 6V16ZM13 1H10.5L9.79 0.29C9.61 0.11 9.35 0 9.09 0H4.91C4.65 0 4.39 0.11 4.21 0.29L3.5 1H1C0.45 1 0 1.45 0 2C0 2.55 0.45 3 1 3H13C13.55 3 14 2.55 14 2C14 1.45 13.55 1 13 1Z" fill="white"/>
                        </svg>
                    </x-icon-button>
                </form>
                <x-icon-button tag="a" href="{{ route('task.edit', $task) }}">
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 0.949786C13.296 0.949786 14.496 1.35979 15.477 2.05979L6.343 11.1928C6.24749 11.285 6.17131 11.3954 6.1189 11.5174C6.06649 11.6394 6.0389 11.7706 6.03775 11.9034C6.0366 12.0362 6.0619 12.1678 6.11218 12.2907C6.16246 12.4136 6.23671 12.5253 6.3306 12.6192C6.4245 12.7131 6.53615 12.7873 6.65905 12.8376C6.78194 12.8879 6.91362 12.9132 7.0464 12.912C7.17918 12.9109 7.3104 12.8833 7.4324 12.8309C7.55441 12.7785 7.66475 12.7023 7.757 12.6068L16.891 3.47279C17.6141 4.48782 18.0019 5.70351 18 6.94979V16.9498C18 17.4802 17.7893 17.9889 17.4142 18.364C17.0391 18.7391 16.5304 18.9498 16 18.9498H2C1.46957 18.9498 0.960859 18.7391 0.585786 18.364C0.210714 17.9889 0 17.4802 0 16.9498V2.94979C0 2.41935 0.210714 1.91065 0.585786 1.53557C0.960859 1.1605 1.46957 0.949786 2 0.949786H12ZM18.657 0.292786C18.8445 0.480314 18.9498 0.734622 18.9498 0.999786C18.9498 1.26495 18.8445 1.51926 18.657 1.70679L16.89 3.47279C16.5006 2.9261 16.0227 2.44821 15.476 2.05879L17.242 0.292786C17.4295 0.105315 17.6838 0 17.949 0C18.2142 0 18.4695 0.105315 18.657 0.292786Z" fill="white"/>
                    </svg>
                </x-icon-button>
                <form method="post" action="{{ route('task.complete', $task) }}">
                    @csrf
                    <x-icon-button tag="button" type="submit">
                        <svg width="10" height="23" viewBox="0 0 10 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 4.875C0 3.58207 0.513615 2.34209 1.42785 1.42785C2.34209 0.513615 3.58207 0 4.875 0C6.16793 0 7.40791 0.513615 8.32215 1.42785C9.23639 2.34209 9.75 3.58207 9.75 4.875C9.75 7.73744 8.13638 11.8105 7.1825 13.9669C6.78113 14.8769 5.87194 15.4375 4.875 15.4375C3.87888 15.4375 2.96969 14.8769 2.5675 13.9669C1.61281 11.8105 0 7.73663 0 4.875ZM4.875 22.75C5.62921 22.75 6.35253 22.4504 6.88584 21.9171C7.41914 21.3838 7.71875 20.6605 7.71875 19.9062C7.71875 19.152 7.41914 18.4287 6.88584 17.8954C6.35253 17.3621 5.62921 17.0625 4.875 17.0625C4.12079 17.0625 3.39747 17.3621 2.86417 17.8954C2.33086 18.4287 2.03125 19.152 2.03125 19.9062C2.03125 20.6605 2.33086 21.3838 2.86417 21.9171C3.39747 22.4504 4.12079 22.75 4.875 22.75Z" fill="white"/>
                        </svg>
                    </x-icon-button>
                </form>
            </div>
        </div>
    </x-content-wrapper>
</x-app-layout>

