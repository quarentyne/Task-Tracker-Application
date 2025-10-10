<x-guest-layout>
    <div class="pt-10 px-12 pb-8 w-full">
        <h1 class="text-xl font-bold font-[Montserrat] mb-20 max-w-[900px]">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h1>
        <div class="flex justify-start relative w-full">
            <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-5 min-w-[50%] justify-center">
                @csrf
                <div>
                    <x-input-with-svg
                        id="email"
                        placeholder="Enter Email"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autocomplete="email"
                    >
                        <svg width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23 0H3C1.625 0 0.5125 1.125 0.5125 2.5L0.5 17.5C0.5 18.875 1.625 20 3 20H23C24.375 20 25.5 18.875 25.5 17.5V2.5C25.5 1.125 24.375 0 23 0ZM23 5L13 11.25L3 5V2.5L13 8.75L23 2.5V5Z" fill="black"/>
                        </svg>
                    </x-input-with-svg>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div>
                    <x-primary-button type="sumbit">Reset Password</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
