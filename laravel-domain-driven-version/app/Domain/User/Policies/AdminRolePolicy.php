<?php

namespace Domain\User\Policies;

use Domain\User\Models\Admin;
use Domain\User\Models\Menu;
use Domain\User\Models\MenuVisibility;

class AdminRolePolicy
{
    /**
     * Create a new policy instance.
     */
    public function accessDomain(Admin $admin, Menu $menu)
    {
        return MenuVisibility::where('menu_id', $menu->id)
            ->where('admin_role_id', $admin->admin_role_id)
            ->exists();
    }
}