<?php
return [
    'name.required' => 'The name field is required.',
    'name.string'   => 'The name must be a valid string.',
    'name.min'      => 'The name must be at least 3 characters.',
    'name.max'      => 'The name may not be greater than 255 characters.',

    'email.required' => 'The email field is required.',
    'email.email'    => 'The email must be a valid email address.',
    'email.exists'   => 'This email does not exist in our records.',
    'email.used'     => 'This email is already in use; you cannot use it.',

    'phone.required' => 'The phone number is required.',
    'phone.digits'   => 'The phone number must be exactly 11 digits.',
    'phone.exists'   => 'This phone number does not exist in our records.',
    'phone.used'     => 'This number is already in use; you cannot use it.',

    'password.required' => 'The password field is required.',
    'password.string'   => 'The password must be a valid string.',
    'password.min'      => 'The password must be at least 6 characters.',
    'password.max'      => 'The password may not be greater than 255 characters.',

    'login.required' => 'The login field is required.',
    'otp.notFound' => 'The verification code you entered is incorrect.',
    'otp.digits' => 'the otp failed must be 6 digits.'
];
