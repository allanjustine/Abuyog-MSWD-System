<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, mixed>  $input
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'first_name'        => ['required', 'string', 'max:255'],
            'last_name'         => ['required', 'string', 'max:255'],
            'middle_name'       => ['nullable', 'string', 'max:255'],
            'suffix'            => ['nullable', 'string', 'max:50'],
            'phone'             => ['required', 'string', 'max:20'],
            'date_of_birth'     => ['required', 'date'],
            'age'               => ['required', 'integer', 'min:0'],
            'gender'            => ['required', 'in:Male,Female'],
            'has_minor_child'   => ['required'],
            'email'             => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo'             => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if (
            $input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail
        ) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'first_name'    => $input['first_name'],
                'last_name'     => $input['last_name'],
                'middle_name'   => $input['middle_name'] ?? null,
                'suffix'        => $input['suffix'] ?? null,
                'phone'         => $input['phone'],
                'date_of_birth' => $input['date_of_birth'],
                'age'           => $input['age'],
                'gender'        => $input['gender'],
                'has_minor_child' => $input['has_minor_child'],
                'email' => $input['email'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
