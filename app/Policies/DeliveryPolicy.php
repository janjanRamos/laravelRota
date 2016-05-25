<?php

namespace App\Policies;

use App\User;
use App\Delivery;
use Illuminate\Auth\Access\HandlesAuthorization;

class DeliveryPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function destroy(User $user, Delivery $delivery)
    {
        return $user->id === $delivery->user_id;
    }
}
