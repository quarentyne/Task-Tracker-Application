<x-app-layout>
    <x-content-wrapper>
        <x-content-header>Account Information</x-content-header>
        <x-content-wrapper class="mb-5 mt-5">
            @include('profile.partials.update-profile-information-form')
        </x-content-wrapper>
        <div class="grid grid-cols-2 gap-5">
            <x-content-wrapper>
                @include('profile.partials.update-password-form')
            </x-content-wrapper>
            <x-content-wrapper>
                @include('profile.partials.delete-user-form')
            </x-content-wrapper>
        </div>
    </x-content-wrapper>
</x-app-layout>
