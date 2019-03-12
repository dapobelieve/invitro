<?php

namespace App\Permissions;
use App\Models\{Role, Permission};

trait HasPermissionsTrait
{
    public function givePermissionTo(...$permission)
    {
        // get all the permissions array & flatten array
        $permissions = $this->getPermissionModels(array_flatten($permission));

        if ($permissions === null) {
            return $this;
        }

        $this->permissions()->saveMany($permissions);

        // save many to many
        return $this;
    }

    public function revokePermission(...$permissions)
    {
        $permissions = $this->getPermissionModels(array_flatten($permissions));

        $this->permissions()->detach($permissions);
    }

    public function hasPermissionTo($permission)
    {
        // has permission via a role
        return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission);
    }

    protected function hasPermission($permission)
    {
        return (bool) $this->permissions->where('name', $permission->name)->count();
    }

    protected function hasPermissionThroughRole($permission)
    {
        /**
         * loop over the permission's roles
         * if the user's roles also contains the permissions roles
         * return true
         */

        foreach($permission->roles as $role)
        {
            if ($this->roles->contains($role)) {
                return true;
            }
        }

        return false;
    }

    // check if a user has a role or roles
    public function hasRole(...$roles)
    {
        foreach ($roles as $role) {
            if ($this->roles->contains('name', ucfirst($role))) {
                return true;
            }

            return false;
        }
    }

    protected function getPermissionModels ($permissions)
    {
        return Permission::whereIn('name', $permissions)->get();
    }


    public function roles ()
    {
        return $this->belongsToMany(Role::class, 'users_roles');
    }

    public function permissions ()
    {
        return $this->belongsToMany(Permission::class, 'users_permissions');
    }
}