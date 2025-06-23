<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Http;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input)
    {
        // $recaptchaToken = $input['recaptcha_token'];

        //  $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        //     'secret'   => env('NOCAPTCHA_SECRET'),
        //     'response' => $recaptchaToken,
        // ]);

        // $result = $response->json();

        // if (!($result['success'] ?? false) || ($result['score'] ?? 0) < 0.5) {
        //     return back()->withErrors(['captcha' => 'reCAPTCHA verification failed.']);
        // }

        Validator::make($input, [
            'last_name' => ['required', 'string', 'max:255', 'alpha'],
            'first_name' => ['required', 'string', 'max:255', 'alpha'],
            'suffix' => ['nullable', 'string', 'min:1', 'alpha'],
            'phone' => ['required', 'numeric'],
            'barangay_id' => ['required', 'exists:barangays,id'],
            'gender' => ['required'],
            'has_minor_child' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'date_of_birth' => ['required', 'before_or_equal:today'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            'g-recaptcha-response' => 'required|captcha',
        ])->validate();

        return User::create([
            'last_name' => $input['last_name'],
            'first_name' => $input['first_name'],
            'middle_name' => $input['middle_name'],
            'suffix' => $input['suffix'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'barangay_id' => $input['barangay_id'],
            'gender' => $input['gender'],
            'password' => Hash::make($input['password']),
            'date_of_birth' => $input['date_of_birth'],
            'age' => Carbon::parse($input['date_of_birth'])->age,
            'has_minor_child' => $input['has_minor_child']
        ]);
    }
}
