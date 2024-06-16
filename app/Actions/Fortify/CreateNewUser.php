<?php

// App\Actions\Fortify\CreateNewUser.php
namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Spatie\Permission\Models\Role;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'], 
            'city' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'file', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'special' => ['required', 'string', 'max:255'],
            'bio' => ['nullable', 'string'], // Added validation for bio field

            'phone' => ['required', 'string', 'max:255','unique:users', 'regex:/^(06|07|05|08)\d{8}$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();
    
        
        // Handle file uploads
        $imagePath = isset($input['image']) ? $input['image']->store('images', 'public') : null;
    
        $user = User::create([
            'name' => $input['name'],
            'city' => $input['city'],
            'phone' => $input['phone'],
            'image' => $imagePath, // Save the path of the uploaded image
            'special' => $input['special'],
            'bio' => '',
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    
        /* $user->assignRole('Patient'); */
    
        return $user; 
    }
    
        
}