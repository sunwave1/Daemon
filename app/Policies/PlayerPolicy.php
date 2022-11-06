<?php

namespace App\Policies;

use App\Models\DaemonAccount;
use App\Models\Player;
use Illuminate\Auth\Access\HandlesAuthorization;

class PlayerPolicy
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
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(DaemonAccount $daemonAccount, Player $player)
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
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(DaemonAccount $daemonAccount, Player $player)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\DaemonAccount  $daemonAccount
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(DaemonAccount $daemonAccount, Player $player)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\DaemonAccount  $daemonAccount
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(DaemonAccount $daemonAccount, Player $player)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\DaemonAccount  $daemonAccount
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(DaemonAccount $daemonAccount, Player $player)
    {
        //
    }
}
