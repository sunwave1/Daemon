<?php

namespace App\Policies;

use App\Models\Account;
use App\Models\DaemonAccount;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccountPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\DaemonAccount  $daemonAccount
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(DaemonAccount $daemonAccount)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\DaemonAccount  $daemonAccount
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(DaemonAccount $daemonAccount, Account $account)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\DaemonAccount  $daemonAccount
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(DaemonAccount $daemonAccount)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\DaemonAccount  $daemonAccount
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(DaemonAccount $daemonAccount, Account $account)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\DaemonAccount  $daemonAccount
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(DaemonAccount $daemonAccount, Account $account)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\DaemonAccount  $daemonAccount
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(DaemonAccount $daemonAccount, Account $account)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\DaemonAccount  $daemonAccount
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(DaemonAccount $daemonAccount, Account $account)
    {
        //
    }
}
