<?php

namespace App\Traits;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait HasPermissionTrait
{
    /**
     * Verifies if a User belongs to any of the provided roles
     *
     * @return Boolean
     */
    public function hasPermissionTo($permission)
    {
        return $this->hasPermissionViaRole($permission) || $this->hasPermission($permission);
    }

    protected function hasPermission($permission)
    {
        return (bool) $this->permissions->where('name', $permission->name)->count();
    }

    public function hasPermissionViaRole($permission)
    {
        foreach ($permission->roles as $role) {
            if ($this->roles->contains($role)) {
                return true;
            }
        }
        return false;

    }

    public function givePermissionTo(...$permissions)
    {  
        $permissions = $this->getPermissions(Arr::flatten($permissions));

        if ($permissions === null) {
            return $this;
        }

        $this->permissions()->saveMany($permissions);
        return $this;
    }

    public function removePermissionTo(...$permissions)
    {  
        $permissions = $this->getPermissions(Arr::flatten($permissions));


        $this->permissions()->detach($permissions);
        return $this;
    }

    public function refreshPermission(...$permissions)
    {  
        $this->permissions()->detach();
        return $this->givePermissionTo($permissions);
    }


    public function getPermissions(array $permissions) {
        return Permission::whereIn('name', $permissions)->get();
    }

    /**
     * Verifies if a User belongs to any of the provided roles
     *
     * @return Boolean
     */
    public function hasRoles(...$roles)
    {
        foreach($roles as $role) {
            if ($this->roles->contains('name', $role)) {
                return true;
            }
        }

        return false;
    }

    /**
     * The permissions that belong to the HasPermissionTrait
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'users_permissions');
    }

    /**
     * The roles that belong to the HasPermissionTrait
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'users_roles');
    }
}

