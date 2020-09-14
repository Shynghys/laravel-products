<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Facades\Hash;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create articles']);
        Permission::create(['name' => 'see articles']);
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);



        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'user']);
        $role1->givePermissionTo('see articles');


        $role2 = Role::create(['name' => 'moderator']);
        $role2->givePermissionTo('edit articles');
        $role2->givePermissionTo('create articles');
        $role2->givePermissionTo('see articles');

        $role3 = Role::create(['name' => 'super-admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = Factory(App\User::class)->create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => Hash::make('qwe12345'),
        ]);
        $user->assignRole($role1);

        $user = Factory(App\User::class)->create([
            'name' => 'Moderator',
            'email' => 'moderator@example.com',
            'password' => Hash::make('qwe12345'),
        ]);
        $user->assignRole($role2);

        $user = Factory(App\User::class)->create([
            'name' => 'Super-Admin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('qwe12345'),
        ]);
        $user->assignRole($role3);
    }
}
