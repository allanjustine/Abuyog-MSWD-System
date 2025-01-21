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

            <div>
                <x-label for="last_name" value="{{ __('Last Name') }}" />
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
                <x-input id="middle_name" class="block w-full mt-1" type="text" name="middle_name" :value="old('middle_name')" />
            </div>
            <div>
                <x-label for="suffix" value="{{ __('Suffix') }}" />
                <x-input id="suffix" class="block w-full mt-1" type="text" name="suffix" :value="old('suffix')"
                    />
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
                <select name="barangay" id="barangay" class="block w-full mt-1 form-control" required>
                    <option value="" disabled selected>Select Barangay</option>
                    <option value="Alangilan">Alangilan</option>
                    <option value="Anibongan">Anibongan</option>
                    <option value="Bagacay">Bagacay</option>
                    <option value="Bahay">Bahay</option>
                    <option value="Balinsasayao">Balinsasayao</option>
                    <option value="Balocawe">Balocawe</option>
                    <option value="Balocawehay">Balocawehay</option>
                    <option value="Barayong">Barayong</option>
                    <option value="Bayabas">Bayabas</option>
                    <option value="Bito">Bito</option>
                    <option value="Buaya">Buaya</option>
                    <option value="Buenavista">Buenavista</option>
                    <option value="Bulak">Bulak</option>
                    <option value="Bunga">Bunga</option>
                    <option value="Buntay">Buntay</option>
                    <option value="Burubud-an">Burubud-an</option>
                    <option value="Cadac-an">Cadac-an</option>
                    <option value="Cagbolo">Cagbolo</option>
                    <option value="Can-aporong">Can-aporong</option>
                    <option value="Canmarating">Canmarating</option>
                    <option value="Can-uguib">Can-uguib</option>
                    <option value="Capilian">Capilian</option>
                    <option value="Combis">Combis</option>
                    <option value="Dingle">Dingle</option>
                    <option value="Guintagbucan">Guintagbucan</option>
                    <option value="Hampipila">Hampipila</option>
                    <option value="Katipunan">Katipunan</option>
                    <option value="Kikilo">Kikilo</option>
                    <option value="Laray">Laray</option>
                    <option value="Lawa-an">Lawa-an</option>
                    <option value="Libertad">Libertad</option>
                    <option value="Loyonsawang">Loyonsawang</option>
                    <option value="Mag-atubang">Mag-atubang</option>
                    <option value="Mahagna">Mahagna</option>
                    <option value="Mahayahay">Mahayahay</option>
                    <option value="Maitum">Maitum</option>
                    <option value="Malaguicay">Malaguicay</option>
                    <option value="Matagnao">Matagnao</option>
                    <option value="Nalibunan">Nalibunan</option>
                    <option value="Nebga">Nebga</option>
                    <option value="New Taligue">New Taligue</option>
                    <option value="Odiongan">Odiongan</option>
                    <option value="Old Taligue">Old Taligue</option>
                    <option value="Pagsang-an">Pagsang-an</option>
                    <option value="Paguite">Paguite</option>
                    <option value="Parasanon">Parasanon</option>
                    <option value="Picas Sur">Picas Sur</option>
                    <option value="Pilar">Pilar</option>
                    <option value="Pinamanagan">Pinamanagan</option>
                    <option value="Salvacion">Salvacion</option>
                    <option value="San Francisco">San Francisco</option>
                    <option value="San Isidro">San Isidro</option>
                    <option value="San Roque">San Roque</option>
                    <option value="Santa Fe">Santa Fe</option>
                    <option value="Santa Lucia">Santa Lucia</option>
                    <option value="Santo Niño">Santo Niño</option>
                    <option value="Tabigue">Tabigue</option>
                    <option value="Tadoc">Tadoc</option>
                    <option value="Tib-o">Tib-o</option>
                    <option value="Tinalian">Tinalian</option>
                    <option value="Tinocolan">Tinocolan</option>
                    <option value="Tuy-a">Tuy-a</option>
                    <option value="Victory">Victory</option>
                </select>
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
                                        '" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                        __('Terms of Service') .
                                        '</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
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
