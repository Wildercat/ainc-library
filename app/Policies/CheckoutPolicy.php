<?php

namespace App\Policies;

use App\Checkout;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CheckoutPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any checkouts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->admin;
    }

    /**
     * Determine whether the user can view the checkout.
     *
     * @param  \App\User  $user
     * @param  \App\Checkout  $checkout
     * @return mixed
     */
    public function view(User $user, Checkout $checkout)
    {
        //
    }

    /**
     * Determine whether the user can create checkouts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the checkout.
     *
     * @param  \App\User  $user
     * @param  \App\Checkout  $checkout
     * @return mixed
     */
    public function update(User $user, Checkout $checkout)
    {
        //
    }

    /**
     * Determine whether the user can delete the checkout.
     *
     * @param  \App\User  $user
     * @param  \App\Checkout  $checkout
     * @return mixed
     */
    public function delete(User $user, Checkout $checkout)
    {
        return $user->admin ?: $user->id == $checkout->user_id;
    }

    /**
     * Determine whether the user can restore the checkout.
     *
     * @param  \App\User  $user
     * @param  \App\Checkout  $checkout
     * @return mixed
     */
    public function restore(User $user, Checkout $checkout)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the checkout.
     *
     * @param  \App\User  $user
     * @param  \App\Checkout  $checkout
     * @return mixed
     */
    public function forceDelete(User $user, Checkout $checkout)
    {
        //
    }
}
