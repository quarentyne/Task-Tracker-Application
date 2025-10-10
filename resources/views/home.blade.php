<x-guest-layout>
    <div class="flex flex-col justify-between items-center text-center p-12 w-full">
        <div>
            <h1 class="font-semibold text-2xl mb-8">Welcome to Daily Task Tracker</h1>
            <p class="font-medium text-lg">Organize your day effortlessly.<br />Stay focused, stay productive — your tasks, always in sync.</p>
        </div>
        <div class="flex gap-20 mb-4">
            <x-primary-button tag="a" href="{{ route('register') }}" class="text-xs">Sign Up</x-primary-button>
            <x-primary-button tag="a" href="{{ route('login') }}" class="text-xs">Sign In</x-primary-button>
        </div>
    </div>
</x-guest-layout>
