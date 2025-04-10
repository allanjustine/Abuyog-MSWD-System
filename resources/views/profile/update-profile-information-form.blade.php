<div>
    <x-form-section submit="updateProfileInformation">
        <x-slot name="title">
            {{ __('Profile Information') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Update your account\'s profile information and email address.') }}
        </x-slot>

        <x-slot name="form">
            <div class="col-span-6">
                <x-button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropLive">Update Basic
                    Information
                </x-button>
            </div>
            <!-- Profile Photo -->
            {{-- <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" id="photo" class="hidden" wire:model.live="photo" x-ref="photo" x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}"
                        class="object-cover rounded-full size-20">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block bg-center bg-no-repeat bg-cover rounded-full size-20"
                        x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-secondary-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-secondary-button>

                @if ($this->user->profile_photo_path)
                <x-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                    {{ __('Remove Photo') }}
                </x-secondary-button>
                @endif

                <x-input-error for="photo" class="mt-2" />
            </div> --}}

            <!-- Last Name -->
            <div class="col-span-6 sm:col-span-3">
                <x-label for="last_name" value="{{ __('Last Name') }}" />
                <x-input id="last_name" type="text" class="block w-full mt-1" wire:model="state.last_name" required
                    autocomplete="family-name" />
                <x-input-error for="last_name" class="mt-2" />
            </div>

            <!-- First Name -->
            <div class="col-span-6 sm:col-span-3">
                <x-label for="first_name" value="{{ __('First Name') }}" />
                <x-input id="first_name" type="text" class="block w-full mt-1" wire:model="state.first_name" required
                    autocomplete="given-name" />
                <x-input-error for="first_name" class="mt-2" />
            </div>

            <!-- Middle Name -->
            <div class="col-span-6 sm:col-span-3">
                <x-label for="middle_name" value="{{ __('Middle Name') }}" />
                <x-input id="middle_name" type="text" class="block w-full mt-1" wire:model="state.middle_name"
                    autocomplete="additional-name" />
                <x-input-error for="middle_name" class="mt-2" />
            </div>

            <!-- Suffix -->
            <div class="col-span-6 sm:col-span-3">
                <x-label for="suffix" value="{{ __('Suffix') }}" />
                <x-input id="suffix" type="text" class="block w-full mt-1" wire:model="state.suffix"
                    autocomplete="honorific-suffix" />
                <x-input-error for="suffix" class="mt-2" />
            </div>

            <!-- Phone -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input id="phone" type="text" class="block w-full mt-1" wire:model="state.phone" required
                    autocomplete="tel" />
                <x-input-error for="phone" class="mt-2" />
            </div>

            <!-- Date of Birth -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="date_of_birth" value="{{ __('Date of Birth') }}" />
                <x-input id="date_of_birth" type="date" class="block w-full mt-1"
                    wire:model.live.debounce.200ms="state.date_of_birth" required />
                <x-input-error for="date_of_birth" class="mt-2" />
            </div>

            <!-- Age -->
            <div class="col-span-6 sm:col-span-2">
                <x-label for="age" value="{{ __('Age') }}" />
                <x-input id="age" type="number" min="0" class="block w-full mt-1" wire:model="state.age" required />
                <x-input-error for="age" class="mt-2" />
            </div>

            <!-- Gender -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="gender" value="{{ __('Gender') }}" />
                <select id="gender" class="block w-full mt-1" wire:model="state.gender" required>
                    <option value="Male">{{ __('Male') }}</option>
                    <option value="Female">{{ __('Female') }}</option>
                </select>
                <x-input-error for="gender" class="mt-2" />
            </div>

            <!-- Has Minor Child -->
            <div class="col-span-6 sm:col-span-4">
                <x-label value="{{ __('Has Minor Child') }}" />
                <div class="flex mt-2 space-x-4">
                    <label class="inline-flex items-center">
                        <input type="radio" name="has_minor_child" value="1" wire:model="state.has_minor_child"
                            class="form-radio" />
                        <span class="ml-2">{{ __('Yes') }}</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="has_minor_child" value="0" wire:model="state.has_minor_child"
                            class="form-radio" />
                        <span class="ml-2">{{ __('No') }}</span>
                    </label>
                </div>
                <x-input-error for="has_minor_child" class="mt-2" />
            </div>


            <!-- Email -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" type="email" class="block w-full mt-1" wire:model="state.email" required
                    autocomplete="username" />
                <x-input-error for="email" class="mt-2" />

                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && !
                $this->user->hasVerifiedEmail())
                <p class="mt-2 text-sm">
                    {{ __('Your email address is unverified.') }}

                    <button type="button"
                        class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        wire:click.prevent="sendEmailVerification">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if ($this->verificationLinkSent)
                <p class="mt-2 text-sm font-medium text-green-600">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif
                @endif
            </div>
        </x-slot>

        <x-slot name="actions">
            <x-action-message class="text-green-400 me-3" on="saved">
                {{ __('Saved.') }}
            </x-action-message>

            <x-button wire:loading.attr="disabled" wire:target="photo">
                {{ __('Save') }}
            </x-button>
        </x-slot>
    </x-form-section>

</div>
