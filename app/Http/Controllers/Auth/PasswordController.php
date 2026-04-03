<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $user = $request->user();

        if (Hash::check($validated['password'], $user->password)) {
            throw ValidationException::withMessages([
                'updatePassword.password' => 'Please choose a password different from your current password.',
            ]);
        }

        $previousPassword = $user->passwordHistories()->first();

        if ($previousPassword && Hash::check($validated['password'], $previousPassword->password)) {
            throw ValidationException::withMessages([
                'updatePassword.password' => 'Please choose a password different from your previous password.',
            ]);
        }

        $oldPassword = $user->password;

        $user->update([
            'password' => Hash::make($validated['password']),
        ]);

        $user->passwordHistories()->create([
            'password' => $oldPassword,
        ]);

        $user->passwordHistories()
            ->skip(1)
            ->take(PHP_INT_MAX)
            ->delete();

        return back()->with('status', 'password-updated');
    }
}
