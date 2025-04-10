<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="{{ asset('../assets/img/mswd-logo.png') }}" alt="Custom Logo"
                style="border-radius: 50%; width: 100px; height: 100px;">
        </x-slot>


        <x-validation-errors class="mb-4" />

        <style>
            input[type="text"]:not(#email):not([type="password"]):not(#password_confirmation) {
                text-transform: uppercase;
            }
        </style>


        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1
                style="text-align: center; font-size: 2rem; font-weight: bold; margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">
                REGISTRATION FORM
            </h1>


            <div>
                <x-label for="last_name" value="{{ __('Last Name *') }}" />
                <x-input id="last_name" class="block w-full mt-1" type="text" name="last_name" :value="old('last_name')"
                    required autofocus autocomplete="last_name" />
            </div>
            <div>
                <x-label for="first_name" value="{{ __('First Name') }}" />
                <x-input id="first_name" class="block w-full mt-1" type="text" name="first_name" :value="old('first_name')"
                    required autofocus autocomplete="first_name" />
            </div>
            <div>
                <x-label for="middle_name" value="{{ __('Middle Name') }}" />
                <x-input id="middle_name" class="block w-full mt-1" type="text" name="middle_name"
                    :value="old('middle_name')" />
            </div>
            <div>
                <x-label for="suffix" value="{{ __('Suffix') }}" />
                <x-input id="suffix" class="block w-full mt-1" type="text" name="suffix" :value="old('suffix')" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')"
                    required autocomplete="email" />
            </div>

            <div>
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input id="phone" class="block w-full mt-1" type="text" name="phone" :value="old('phone')" />
            </div>

            <div>
                <x-label for="barangay" value="{{ __('Barangay') }}" />
                <select name="barangay_id" id="barangay" class="block w-full mt-1 form-control" required>
                    <option value="" selected hidden>Select Barangay</option>
                    <option value="" disabled>Select Barangay</option>
                    @foreach (\App\Models\Barangay::all() as $barangay)
                        <option value="{{ $barangay->id }}"
                            {{ old('barangay_id') == $barangay->id ? 'selected' : '' }}>{{ $barangay->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <x-label for="gender" value="{{ __('Gender') }}" />
                <select name="gender" id="gender" class="block w-full mt-1 form-control" required>
                    <option value="" selected hidden>Select Gender</option>
                    <option value="" disabled>Select Gender</option>
                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                    <!-- <option value="Rather not to say" {{ old('gender') == 'Rather not to say' ? 'selected' : '' }}>
                        Rather
                        not to say</option> -->
                </select>
            </div>
            <div class="mt-4">
                <x-label for="date_of_birth" value="{{ __('Date of birth') }}" />
                <x-input id="date_of_birth" class="block w-full mt-1" type="date" name="date_of_birth" required
                    autocomplete="Date of birth" />
            </div>
            <div class="mt-4">
                <x-label for="has_minor_child" value="{{ __('Do you have minor child?') }}" />
                <div class="flex gap-3">
                    <div class="flex gap-2"><span>Yes</span>
                        <x-input id="has_minor_child" class="block mt-1" type="radio" name="has_minor_child" required
                            autocomplete="Minor Child" value="1" />
                    </div>
                    <div class="flex gap-2"><span>No</span>
                        <x-input id="has_minor_child" class="block mt-1" type="radio" name="has_minor_child" required
                            autocomplete="Minor Child" value="0" />
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block w-full mt-1" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' =>
                                        '<a target="_blank" href="' .
                                        route('terms.show') .
                                        '"
                                                                            class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                        __('Terms of Service') .
                                        '</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '"
                                                                            class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                        __('Privacy Policy') .
                                        '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
