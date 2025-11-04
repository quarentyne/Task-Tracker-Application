<x-content-wrapper class="flex flex-col justify-between {{ $task->completed_at ? 'bg-lime-200' : '' }}">
    <div>
        <div class="grid grid-cols-[90%_10%] gap-2">
            <a class="font-semibold" href="{{ route('task.show', $task) }}">{{ $task->title }}</a>
            <div class="text-right">
                <x-dropdown width="w-[150px]">
                    <x-slot name="trigger">
                        <button type="button" class="h-full">
                            <svg width="16" height="5" viewBox="0 0 16 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.07444 4.14007C2.94398 4.14007 3.64888 3.32522 3.64888 2.32004C3.64888 1.31486 2.94398 0.5 2.07444 0.5C1.2049 0.5 0.5 1.31486 0.5 2.32004C0.5 3.32522 1.2049 4.14007 2.07444 4.14007Z" stroke="#A1A3AB"/>
                                <path d="M7.58494 4.14007C8.45448 4.14007 9.15938 3.32522 9.15938 2.32004C9.15938 1.31486 8.45448 0.5 7.58494 0.5C6.7154 0.5 6.0105 1.31486 6.0105 2.32004C6.0105 3.32522 6.7154 4.14007 7.58494 4.14007Z" stroke="#A1A3AB"/>
                                <path d="M13.0954 4.14007C13.965 4.14007 14.6699 3.32522 14.6699 2.32004C14.6699 1.31486 13.965 0.5 13.0954 0.5C12.2259 0.5 11.521 1.31486 11.521 2.32004C11.521 3.32522 12.2259 4.14007 13.0954 4.14007Z" stroke="#A1A3AB"/>
                            </svg>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="javascript:void(0);">
                            <form method="post" action="{{ route('task.complete', $task) }}">
                                @csrf
                                <button class="" type="submit">{{ $task->completed_at ? 'Incomplete' : 'Complete' }} Task</button>
                            </form>
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('task.edit', $task) }}">
                            Edit Task
                        </x-dropdown-link>
                        <x-dropdown-link href="javascript:void(0);">
                            <form method="post" action="{{ route('task.destroy', $task) }}">
                                @csrf
                                @method('delete')
                                <button class="" type="submit">Delete Task</button>
                            </form>
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
        <p class="line-clamp-3 text-sm text-neutral-500 mt-1">{{ $task->description }}</p>
    </div>
    <div class="mt-1 text-xs flex justify-between">
        <span>Category: <a href="{{ route('categories.show', $task->category) }}">{{ $task->category->name }}</a></span>
        <div class="flex flex-col gap-1 items-end">
            <span class="text-zinc-400 text-[10px]">Created on: {{ $task->created_at->format('d/m/Y H:i') }}</span>
            @if($task->completed_at)
                <span class="text-zinc-400 text-[10px]">Completed at: {{  \Carbon\Carbon::parse($task->completed_at)->format('d/m/Y H:i') }}</span>
            @endif
        </div>
    </div>
</x-content-wrapper>
