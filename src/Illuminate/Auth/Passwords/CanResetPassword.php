<?php

namespace Illuminate\Auth\Passwords;

use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;

trait CanResetPassword
{
    /**
     * Get the e-mail address where password reset links are sent.
     *
     * @return string
     */
    public function getEmailForPasswordReset()
    {
        return $this->email;
    }

    /**
     * Get the name of the unique password reset identifier for the user.
     *
     * @return string
     */
    public function getPasswordResetIdentifierName()
    {
        return 'email';
    }

    /**
     * Get the unique password reset identifier for the user.
     *
     * @return mixed
     */
    public function getPasswordResetIdentifier()
    {
        return $this->{$this->getPasswordResetIdentifierName()};
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
