<?php

namespace Illuminate\Contracts\Auth;

interface CanResetPassword
{
    /**
     * Get the e-mail address where password reset links are sent.
     *
     * @return string
     */
    public function getEmailForPasswordReset();

    /**
     * Get the name of the unique password reset identifier for the user.
     *
     * @return string
     */
    public function getPasswordResetIdentifierName();

    /**
     * Get the unique password reset identifier for the user.
     *
     * @return mixed
     */
    public function getPasswordResetIdentifier();

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token);
}
