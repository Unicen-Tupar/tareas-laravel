<?php

namespace App\Policies;

use App\User;
use App\Tareas;
use Illuminate\Auth\Access\HandlesAuthorization;

class TareaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the tareas.
     *
     * @param  \App\User  $user
     * @param  \App\Tareas  $tareas
     * @return mixed
     */
    public function view(User $user, Tareas $tareas)
    {
        if  ($user->id == $tareas->user_id){
          return true;
        }
    }

    /**
     * Determine whether the user can create tareas.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
     
    }

    public function assignOtherUsers(User $user){
      if ($user->isManager == 1){
        return true;
      }
    }

    /**
     * Determine whether the user can update the tareas.
     *
     * @param  \App\User  $user
     * @param  \App\Tareas  $tareas
     * @return mixed
     */
    public function update(User $user, Tareas $tareas)
    {

    }

    /**
     * Determine whether the user can delete the tareas.
     *
     * @param  \App\User  $user
     * @param  \App\Tareas  $tareas
     * @return mixed
     */
    public function delete(User $user, Tareas $tareas)
    {
        //
    }
}
