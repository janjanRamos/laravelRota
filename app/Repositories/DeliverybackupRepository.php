<?php

namespace App\Repositories;

use App\User;
use App\Deliverybackup;

class DeliverybackupRepository
{
    /**
     * Get all of the delirives for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Deliverybackup::where('user_id', $user->id)
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}
