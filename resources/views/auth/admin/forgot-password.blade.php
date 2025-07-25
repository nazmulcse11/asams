<x-website-layout>
    <div class="authentication pt-40 pb-20 md:pt-52 md:pb-24 xl:pt-64 xl:pb-44 bg-cover bg-bottom" style="background-image: url({{ asset('/images/website/authentication-bg.png') }});">
        <div class="container">

            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('admin.password.email') }}" class="bg-white shadow-xl rounded-2xl xl:rounded-3xl p-6 sm:p-10 lg:p-14 max-w-xl mx-auto">

                @csrf

                <div class="form-header text-center space-y-2">
                    <div class="font-semibold text-gunmetal text-2xl">
                        Forgot Password
                    </div>
                    <p class="text-[#8997A9]">
                        Enter your email address to reset your password. <br>
                        We will send you a password reset link via email address.
                    </p>
                </div>
                <div class="form-body space-y-5 my-10">
                    <div class="field-item space-y-2">
                        <label for="email" class="text-gunmetal font-semibold block">
                            Email Address
                        </label>
                        <input type="text" name="email" id="email" placeholder="admin@asams.com" class="w-full" value="{{ old('email') }}">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
                <div class="form-footer">
                    <button type="submit" class="bg-gunmetal text-white font-semibold text-center w-full py-4 rounded-xl transition-all hover:bg-themered">
                        Send Link
                    </button>
                </div>
            </form>
        </div>
    </div>

</x-website-layout>
