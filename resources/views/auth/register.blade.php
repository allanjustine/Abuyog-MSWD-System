<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen px-4 py-12 bg-gradient-to-tr from-blue-100 via-white to-purple-100 sm:px-6 lg:px-8">
        <div class="w-full max-w-2xl p-10 space-y-8 transition-all duration-300 bg-white shadow-2xl rounded-3xl hover:shadow-indigo-200">
            <div class="text-center">
                <img src="{{ asset('../assets/img/mswd-logo.png') }}" alt="Logo"
                    class="w-24 h-24 mx-auto mb-4 border-4 border-white rounded-full shadow-lg">
                <h2 class="text-3xl font-bold text-gray-800 drop-shadow-md">Create Your Account</h2>
                <p class="mt-2 text-sm text-gray-600">Join us by filling out the information below</p>
            </div>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <x-label for="last_name" value="Last Name *" />
                        <x-input id="last_name" class="block w-full mt-1" type="text" name="last_name" :value="old('last_name')" required />
                    </div>
                    <div>
                        <x-label for="first_name" value="First Name *" />
                        <x-input id="first_name" class="block w-full mt-1" type="text" name="first_name" :value="old('first_name')" required />
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <x-label for="middle_name" value="Middle Name" />
                        <x-input id="middle_name" class="block w-full mt-1" type="text" name="middle_name" :value="old('middle_name')" />
                    </div>
                    <div>
                        <x-label for="suffix" value="Suffix" />
                        <x-input id="suffix" class="block w-full mt-1" type="text" name="suffix" :value="old('suffix')" />
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <x-label for="email" value="Email *" />
                        <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required />
                    </div>
                    <div>
                        <x-label for="phone" value="Phone" />
                        <x-input id="phone" class="block w-full mt-1" type="text" name="phone" :value="old('phone')" />
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <x-label for="barangay" value="Barangay *" />
                        <select name="barangay_id" id="barangay" class="block w-full mt-1 form-select" required>
                            <option value="" selected hidden>Select Barangay</option>
                            @foreach (\App\Models\Barangay::all() as $barangay)
                                <option value="{{ $barangay->id }}" {{ old('barangay_id') == $barangay->id ? 'selected' : '' }}>
                                    {{ $barangay->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <x-label for="gender" value="Gender *" />
                        <select name="gender" id="gender" class="block w-full mt-1 form-select" required>
                            <option value="" selected hidden>Select Gender</option>
                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>
                </div>

                <div>
                    <x-label for="date_of_birth" value="Date of Birth *" />
                    <x-input id="date_of_birth" class="block w-full mt-1" type="date" name="date_of_birth" required />
                </div>

                <div>
                    <x-label value="Do you have a minor child?" />
                    <div class="flex items-center gap-4">
                        <label class="inline-flex items-center">
                            <input type="radio" name="has_minor_child" value="1" required class="text-indigo-600 form-radio">
                            <span class="ml-2">Yes</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="has_minor_child" value="0" required class="text-indigo-600 form-radio">
                            <span class="ml-2">No</span>
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <x-label for="password" value="Password *" />
                        <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
                    </div>
                    <div>
                        <x-label for="password_confirmation" value="Confirm Password *" />
                        <x-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required />
                    </div>
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div>
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />
                                <div class="ml-2 text-sm text-gray-600">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="text-indigo-600 underline hover:text-indigo-800">Terms of Service</a>',
                                        'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="text-indigo-600 underline hover:text-indigo-800">Privacy Policy</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

                <div class="flex items-center justify-between mt-6">
                    <a href="{{ route('login') }}" class="text-sm text-indigo-600 transition hover:underline hover:text-indigo-800">Already registered?</a>
                    <button type="submit" class="inline-flex items-center px-5 py-2.5 bg-indigo-600 text-white text-sm font-semibold rounded-xl shadow hover:bg-indigo-700 transition ease-in-out duration-300">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
