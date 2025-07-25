<x-website-layout>
    <div class="authentication pt-40 pb-20 md:pt-52 md:pb-24 xl:pt-64 xl:pb-44 bg-cover bg-bottom" style="background-image: url({{ asset('/images/website/authentication-bg.png') }});">
        <div class="container">

            @env('local')
                <x-login-link redirect-url="{{ route('buyer.dashboard') }}" guard="buyer" label="Log in" />
            @endenv

            <div class="flex justify-center mt-10 space-x-4">
                <a href="{{ route('admin.login') }}"    class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Admin</a>
                <a href="{{ route('employee.login') }}" class="px-6 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">Employee</a>
                <a href="{{ route('agent.login') }}"    class="px-6 py-2 bg-teal-600 text-white rounded-lg hover:bg-teal-700">Agent</a>
                <a href="{{ route('buyer.login') }}"    class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 pointer-events-none opacity-50 cursor-not-allowed" aria-disabled="true">Buyer</a>
            </div>

            <br>

            <form action="{{ route('buyer.login') }}" method="post" class="bg-white shadow-xl rounded-2xl xl:rounded-3xl p-6 sm:p-10 lg:p-14 max-w-xl mx-auto">
                @csrf
                <div class="form-header text-center space-y-2">
                    <div class="font-semibold text-gunmetal text-2xl">
                        Buyer Login
                    </div>
                    <p class="text-[#8997A9]">
                        Welcome! Please fill the form login form
                    </p>
                    <!-- Example Autofill Button -->
                    <button type="button"
                            class="autofill-btn bg-gray-100 text-sm px-4 py-2 rounded hover:bg-gray-200 transition"
                            data-email="buyer@dev.local"
                            data-password="password">
                        Fill Demo Credential
                    </button>
                    <br>
                </div>
                <div class="form-body space-y-5 my-10">
                    <div class="field-item space-y-2">
                        <label for="email" class="text-gunmetal font-semibold block">
                            Username or Email Address
                        </label>
                        <input type="text" name="email" id="email" placeholder="buyer@asams.com" value="{{ old('email') }}" class="w-full">
                        <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                    </div>
                    <div class="field-item space-y-2">
                        <label for="password" class="text-gunmetal font-semibold block">
                            Password
                        </label>
                        <div class="passowrd relative">
                            <input type="password" name="password" id="password" placeholder="****" class="w-full">
                            <button type="button" class="toggle-password group/password absolute right-4 top-1/2 -translate-y-1/2" data-toggle="#password">
                                <svg class="group-[.show]/password:hidden" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.34668 11.3467C6.65335 11.7401 7.13335 12.0001 7.66668 12.0001C8.58668 12.0001 9.33335 11.2534 9.33335 10.3334C9.33335 9.9534 9.20668 9.60007 8.99335 9.32007M1.54667 13.5335C1.14 13.0268 1 12.2202 1 11.0002V9.66683C1 7.00016 1.66667 6.3335 4.33333 6.3335H11C11.24 6.3335 11.46 6.34016 11.6667 6.3535C13.78 6.4735 14.3333 7.24016 14.3333 9.66683V11.0002C14.3333 13.6668 13.6667 14.3335 11 14.3335H4.33333C4.09333 14.3335 3.87333 14.3268 3.66667 14.3135M3.66699 6.33333V5C3.66699 2.79333 4.33366 1 7.66699 1C10.4337 1 11.3603 1.92 11.6003 3.37333M14.3333 1L1 14.3333" stroke="#C4CBD4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                                <svg class="hidden group-[.show]/password:block" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.34668 11.3467C6.65335 11.7401 7.13335 12.0001 7.66668 12.0001C8.58668 12.0001 9.33335 11.2534 9.33335 10.3334C9.33335 9.9534 9.20668 9.60007 8.99335 9.32007M1.54667 13.5335C1.14 13.0268 1 12.2202 1 11.0002V9.66683C1 7.00016 1.66667 6.3335 4.33333 6.3335H11C11.24 6.3335 11.46 6.34016 11.6667 6.3535C13.78 6.4735 14.3333 7.24016 14.3333 9.66683V11.0002C14.3333 13.6668 13.6667 14.3335 11 14.3335H4.33333C4.09333 14.3335 3.87333 14.3268 3.66667 14.3135M3.66699 6.33333V5C3.66699 2.79333 4.33366 1 7.66699 1C10.4337 1 11.3603 1.92 11.6003 3.37333" stroke="#C4CBD4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                    </div>
                    <div class="field-item flex items-center justify-between gap-3">
                        <div class="flex items-center gap-2">
                            <input type="checkbox" name="remember" id="remember_me" class="w-4 h-4">
                            <label for="remember_me" class="select-none cursor-pointer max-lg:text-sm">Remember Me</label>
                        </div>
                        <a href="{{ route("buyer.password.request") }}" class="text-themered font-semibold text-end max-lg:text-sm">
                            Forgot Passowrd?
                        </a>
                    </div>
                </div>
                <div class="form-footer">
                    <button type="submit" class="bg-gunmetal text-white font-semibold text-center w-full py-4 rounded-xl transition-all hover:bg-themered">
                        Login Now
                    </button>
                </div>
            </form>
        </div>
    </div>
    @push ("scripts")
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Attach click event to all autofill buttons
                document.querySelectorAll('.autofill-btn').forEach(function (button) {
                    button.addEventListener('click', function () {
                        // Find the closest form
                        const form = button.closest('form');

                        // Find inputs inside the same form
                        const emailInput = form.querySelector('input[name="email"]');
                        const passwordInput = form.querySelector('input[name="password"]');

                        // Fill the inputs with data from button attributes
                        if (emailInput && passwordInput) {
                            emailInput.value = button.getAttribute('data-email');
                            passwordInput.value = button.getAttribute('data-password');
                        }
                    });
                });
            });
        </script>
    @endpush
</x-website-layout>
