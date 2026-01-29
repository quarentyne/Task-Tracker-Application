<x-app-layout>
    @if (session('success'))
        <div x-data="" x-on:click="$el.remove()" class="alert alert-success mb-8 text-green-600 cursor-pointer">
            {{ session('success') }}
        </div>
   @endif
    <form class="flex gap-5 mb-6" action="{{ route('task.list') }}">
        <div class="flex-1">
            <x-input-label for="filter_category">Filter category</x-input-label>
            <x-select id="filter_category" name="filter_category" class="mt-1 max-w-[50vw] w-full" selected="{{ request()->get('filter_category') }}" :options="[...['' => '--Not chosen--'], ...$categories]" />
        </div>
        <div class="flex-1 flex gap-5">
            <div>
                <x-input-label for="filter_date_created_from">Date created from</x-input-label>
                <x-text-input type="date"
                              id="filter_date_created_from"
                              value="{{ request()->get('filter_date_created_from') }}"
                              name="filter_date_created_from"
                              class="mt-1 max-w-[50vw] w-full"></x-text-input>
            </div>
            <div>
                <x-input-label for="filter_date_created_to">Due created to</x-input-label>
                <x-text-input type="date"
                              id="filter_date_created_to"
                              value="{{ request()->get('filter_date_created_to') }}"
                              name="filter_date_created_to"
                              class="mt-1 max-w-[50vw] w-full"></x-text-input>
            </div>
        </div>
        <div class="flex-1 flex gap-5">
            <div>
                <x-input-label for="filter_date_completed_from">Date completed from</x-input-label>
                <x-text-input type="date"
                              id="filter_date_completed_from"
                              value="{{ request()->get('filter_date_completed_from') }}"
                              name="filter_date_completed_from"
                              class="mt-1 max-w-[50vw] w-full"></x-text-input>
            </div>
            <div>
                <x-input-label for="filter_date_completed_to">Due completed to</x-input-label>
                <x-text-input type="date"
                              id="filter_date_completed_to"
                              value="{{ request()->get('filter_date_completed_to') }}"
                              name="filter_date_completed_to"
                              class="mt-1 max-w-[50vw] w-full"></x-text-input>
            </div>
        </div>
        <div class="flex-1 flex justify-end items-end">
            <x-primary-button tag="button" type="submit">Filter</x-primary-button>
        </div>
    </form>
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
