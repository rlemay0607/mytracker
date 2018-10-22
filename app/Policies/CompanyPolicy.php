<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;


class CompanyPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function viewAny($user)
    {
        return Gate::any(['viewCompany', 'manageCompany'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['viewCompany', 'manageCompany'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('manageCompany');
    }

    public function update($user, $post)
    {
        return $user->can('manageCompany', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('manageCompany', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('manageCompany', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('manageCompany', $post);
    }
}
