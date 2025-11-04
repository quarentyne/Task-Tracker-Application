<x-app-layout>
    <x-content-wrapper>
        <x-content-header>Create Task</x-content-header>
        <form method="post" action="{{ route('task.store') }}">
            @csrf
            <div class="mt-6">
                <x-input-label for="title">Task Title</x-input-label>
                <x-text-input value="{{ old('title') }}" id="title" name="title" class="mt-1 max-w-[50vw] w-full" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
            <div class="mt-6">
                <x-input-label for="due_date">Due Date</x-input-label>
                <x-text-input type="date"
                              id="due_date"
                              value="{{ old('due_date', \Carbon\Carbon::tomorrow()->format('Y-m-d')) }}"
                              name="due_date"
                              class="mt-1 max-w-[50vw] w-full"></x-text-input>
                <x-input-error :messages="$errors->get('due_date')" class="mt-2" />
            </div>
            <div class="mt-6">
                <x-input-label for="category_id">Category</x-input-label>
                <x-select id="category_id" name="category_id" class="mt-1 max-w-[50vw] w-full" :options="$categories" />
                <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
            </div>
            <div class="mt-6">
                <x-input-label for="description">Task Description</x-input-label>
                <x-textarea id="description" name="description" class="mt-1 max-w-[50vw] w-full">{{ old('description') }}</x-textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
            <div class="mt-6 flex gap-6">
                <x-primary-button type="submit">Create</x-primary-button>
                <x-primary-button tag="a" href="{{ route('task.list') }}">Cancel</x-primary-button>
            </div>
        </form>
    </x-content-wrapper>
</x-app-layout>
