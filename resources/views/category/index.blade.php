<x-app-layout>
    @if (session('success'))
        <div x-data="" x-on:click="$el.remove()" class="alert alert-success mb-8 text-green-600 cursor-pointer">
            {{ session('success') }}
        </div>
    @endif
    <x-content-wrapper>
        <x-content-header>Task Categories</x-content-header>
        <x-primary-button tag="a" href="{{ route('categories.create') }}" class="mt-6">Add Category</x-primary-button>
        <table class="mt-12 w-full border-separate border-spacing-0">
            <thead>
            <tr>
                <td class="font-semibold text-center py-4 px-4 border border-zinc-400 border-opacity-60 rounded-tl-2xl w-[10%]">№</td>
                <td class="font-semibold text-center py-4 px-4 border-t border-b border-zinc-400 border-opacity-60">Name</td>
                <td class="font-semibold text-center py-4 px-4 border border-zinc-400 border-opacity-60 rounded-tr-2xl">Action</td>
            </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td class="text-center font-medium border-zinc-400 border-opacity-60 border-l border-r">{{ $loop->index + 1 }}</td>
                        <td class="text-center font-medium">{{ $category->name }}</td>
                        <td class="text-center border-zinc-400 border-opacity-60 border-l border-r pb-2 pt-3">
                            <table class="w-full">
                                <tr>
                                    <td>
                                        <x-primary-button tag="a" href="{{ route('categories.edit', $category) }}">
                                            <svg class="mr-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 0.949786C13.296 0.949786 14.496 1.35979 15.477 2.05979L6.343 11.1928C6.24749 11.285 6.17131 11.3954 6.1189 11.5174C6.06649 11.6394 6.0389 11.7706 6.03775 11.9034C6.0366 12.0362 6.0619 12.1678 6.11218 12.2907C6.16246 12.4136 6.23671 12.5253 6.3306 12.6192C6.4245 12.7131 6.53615 12.7873 6.65905 12.8376C6.78194 12.8879 6.91362 12.9132 7.0464 12.912C7.17918 12.9109 7.3104 12.8833 7.4324 12.8309C7.55441 12.7785 7.66475 12.7023 7.757 12.6068L16.891 3.47279C17.6141 4.48782 18.0019 5.70351 18 6.94979V16.9498C18 17.4802 17.7893 17.9889 17.4142 18.364C17.0391 18.7391 16.5304 18.9498 16 18.9498H2C1.46957 18.9498 0.960859 18.7391 0.585786 18.364C0.210714 17.9889 0 17.4802 0 16.9498V2.94979C0 2.41935 0.210714 1.91065 0.585786 1.53557C0.960859 1.1605 1.46957 0.949786 2 0.949786H12ZM18.657 0.292786C18.8445 0.480314 18.9498 0.734622 18.9498 0.999786C18.9498 1.26495 18.8445 1.51926 18.657 1.70679L16.89 3.47279C16.5006 2.9261 16.0227 2.44821 15.476 2.05879L17.242 0.292786C17.4295 0.105315 17.6838 0 17.949 0C18.2142 0 18.4695 0.105315 18.657 0.292786Z" fill="white"/>
                                            </svg>
                                            Edit
                                        </x-primary-button>
                                    </td>
                                    <td>
                                        <x-primary-button x-data="" x-on:click="$dispatch('open-modal', { name: 'delete-category', id: {{ $category->id }} })">
                                            <svg class="mr-2" width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 16C1 17.1 1.9 18 3 18H11C12.1 18 13 17.1 13 16V6C13 4.9 12.1 4 11 4H3C1.9 4 1 4.9 1 6V16ZM13 1H10.5L9.79 0.29C9.61 0.11 9.35 0 9.09 0H4.91C4.65 0 4.39 0.11 4.21 0.29L3.5 1H1C0.45 1 0 1.45 0 2C0 2.55 0.45 3 1 3H13C13.55 3 14 2.55 14 2C14 1.45 13.55 1 13 1Z" fill="white"/>
                                            </svg>
                                            Delete
                                        </x-primary-button>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td class="py-1 px-4 border border-t-0 border-zinc-400 border-opacity-60 rounded-bl-2xl"></td>
                <td class="py-1 px-4 border-b border-zinc-400 border-opacity-60"></td>
                <td class="py-1 px-4 border border-t-0 border-zinc-400 border-opacity-60 rounded-br-2xl"></td>
            </tr>
            </tfoot>
        </table>
    </x-content-wrapper>
    <x-modal
        name="delete-category">
        <div
            x-data="{ categoryId: null }"
            x-on:open-modal.window="
        if ($event.detail.name === 'delete-category') {
            categoryId = $event.detail.id;
        }">
            <form method="post" :action="categoryId ? `categories/${categoryId}` : ''" class="p-6">
                @csrf
                @method('delete')
                <h2 class="text-lg font-medium text-gray-900">
                    Are you sure you want to delete this category?
                </h2>

                <div class="mt-6 flex justify-end">
                    <x-secondary-button x-on:click="$dispatch('close')">Cancel</x-secondary-button>
                    <x-danger-button class="ms-3">Delete Category</x-danger-button>
                </div>
            </form>
        </div>
    </x-modal>
</x-app-layout>
