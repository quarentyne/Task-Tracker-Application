<x-app-layout>
    @if (session('success'))
        <div x-data="" x-on:click="$el.remove()" class="alert alert-success mb-8 text-green-600 cursor-pointer">
            {{ session('success') }}
        </div>
   @endif
    <x-content-wrapper>
        <div class="flex justify-between items-center">
            <x-content-header>My Tasks</x-content-header>
            <x-primary-button tag="a" href="{{ route('task.create') }}">Add Task</x-primary-button>
        </div>
        <div class="mt-6 grid grid-cols-3 gap-5">
            @foreach($tasks as $task)
                <x-task :task="$task" />
            @endforeach
        </div>
    </x-content-wrapper>
</x-app-layout>
