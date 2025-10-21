<x-app-layout>
    <x-content-wrapper>
        <x-content-header>Edit Category</x-content-header>
        <form action="{{ route('categories.update', $category) }}" method="post">
            @csrf
            @method('put')
            <div class="mt-6">
                <x-input-label for="create_category_name">Category Name</x-input-label>
                <x-text-input id="create_category_name" name="name" class="mt-1 max-w-[50vw] w-full" value="{{ $category->name }}" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="mt-6 flex gap-6">
                <x-primary-button type="submit">Edit</x-primary-button>
                <x-primary-button tag="a" href="{{ route('categories.list') }}">Cancel</x-primary-button>
            </div>
        </form>
    </x-content-wrapper>
</x-app-layout>
