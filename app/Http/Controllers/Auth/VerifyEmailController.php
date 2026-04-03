<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    /**
     * Mark the user's email address as verified from a signed link.
     */
    public function __invoke(Request $request): RedirectResponse
    {
        $user = User::findOrFail($request->route('id'));

        if (! hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification()))) {
            abort(403);
        }

        if ($user->hasVerifiedEmail()) {
            $request->session()->forget('verification_email');

            return redirect()->route('login')->with('status', 'Your email is already verified. You can log in now.');
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        $request->session()->forget('verification_email');

        return redirect()->route('login')->with('status', 'Your email has been verified. You can log in now.');
    }
}
