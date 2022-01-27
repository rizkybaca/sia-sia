<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // reset cahced roles and permission
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions posts
        Permission::create(['name' => 'view posts']);
        Permission::create(['name' => 'create posts']);
        Permission::create(['name' => 'edit posts']);
        Permission::create(['name' => 'delete posts']);
        Permission::create(['name' => 'publish posts']);
        Permission::create(['name' => 'unpublish posts']);

        // create permissions categories
        Permission::create(['name' => 'view categories']);
        Permission::create(['name' => 'create categories']);
        Permission::create(['name' => 'edit categories']);
        Permission::create(['name' => 'delete categories']);

        // create permissions curriculums
        Permission::create(['name' => 'view curriculums']);
        Permission::create(['name' => 'create curriculums']);
        Permission::create(['name' => 'edit curriculums']);
        Permission::create(['name' => 'delete curriculums']);

        // create permissions generations
        Permission::create(['name' => 'view generations']);
        Permission::create(['name' => 'create generations']);
        Permission::create(['name' => 'edit generations']);
        Permission::create(['name' => 'delete generations']);

        // create permissions departments
        Permission::create(['name' => 'view departments']);
        Permission::create(['name' => 'create departments']);
        Permission::create(['name' => 'edit departments']);
        Permission::create(['name' => 'delete departments']);

        // create permissions grades
        Permission::create(['name' => 'view grades']);
        Permission::create(['name' => 'create grades']);
        Permission::create(['name' => 'edit grades']);
        Permission::create(['name' => 'delete grades']);

        // create permissions courses
        Permission::create(['name' => 'view courses']);
        Permission::create(['name' => 'create courses']);
        Permission::create(['name' => 'edit courses']);
        Permission::create(['name' => 'delete courses']);

        // create permissions student_profiles
        Permission::create(['name' => 'view student_profiles']);
        Permission::create(['name' => 'create student_profiles']);
        Permission::create(['name' => 'edit student_profiles']);
        Permission::create(['name' => 'delete student_profiles']);

        // create permissions teacher_profiles
        Permission::create(['name' => 'view teacher_profiles']);
        Permission::create(['name' => 'create teacher_profiles']);
        Permission::create(['name' => 'edit teacher_profiles']);
        Permission::create(['name' => 'delete teacher_profiles']);

        // create permissions users
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);

        // create permissions academic_schedules
        Permission::create(['name' => 'view academic_schedules']);
        Permission::create(['name' => 'create academic_schedules']);
        Permission::create(['name' => 'edit academic_schedules']);
        Permission::create(['name' => 'delete academic_schedules']);

        // create permissions financial_schedules
        Permission::create(['name' => 'view financial_schedules']);
        Permission::create(['name' => 'create financial_schedules']);
        Permission::create(['name' => 'edit financial_schedules']);
        Permission::create(['name' => 'delete financial_schedules']);

        // create permissions financial_bills
        Permission::create(['name' => 'view financial_bills']);
        Permission::create(['name' => 'create financial_bills']);
        Permission::create(['name' => 'edit financial_bills']);
        Permission::create(['name' => 'delete financial_bills']);

        //create roles and assign existing permissions
        $studentRole = Role::create(['name' => 'student']);
        $studentRole->givePermissionTo('view student_profiles');
        $studentRole->givePermissionTo('view departments');
        $studentRole->givePermissionTo('view grades');
        $studentRole->givePermissionTo('view courses');
        $studentRole->givePermissionTo('view academic_schedules');
        $studentRole->givePermissionTo('view financial_schedules');
        $studentRole->givePermissionTo('view financial_bills');
        $studentRole->givePermissionTo('edit student_profiles');

        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo('view posts');
        $adminRole->givePermissionTo('create posts');
        $adminRole->givePermissionTo('edit posts');
        $adminRole->givePermissionTo('delete posts');
        $adminRole->givePermissionTo('publish posts');
        $adminRole->givePermissionTo('unpublish posts');

        $adminRole->givePermissionTo('view categories');
        $adminRole->givePermissionTo('create categories');
        $adminRole->givePermissionTo('edit categories');
        $adminRole->givePermissionTo('delete categories');

        $adminRole->givePermissionTo('view curriculums');
        $adminRole->givePermissionTo('create curriculums');
        $adminRole->givePermissionTo('edit curriculums');
        $adminRole->givePermissionTo('delete curriculums');

        $adminRole->givePermissionTo('view generations');
        $adminRole->givePermissionTo('create generations');
        $adminRole->givePermissionTo('edit generations');
        $adminRole->givePermissionTo('delete generations');

        $adminRole->givePermissionTo('view departments');
        $adminRole->givePermissionTo('create departments');
        $adminRole->givePermissionTo('edit departments');
        $adminRole->givePermissionTo('delete departments');

        $adminRole->givePermissionTo('view grades');
        $adminRole->givePermissionTo('create grades');
        $adminRole->givePermissionTo('edit grades');
        $adminRole->givePermissionTo('delete grades');

        $adminRole->givePermissionTo('view courses');
        $adminRole->givePermissionTo('create courses');
        $adminRole->givePermissionTo('edit courses');
        $adminRole->givePermissionTo('delete courses');

        $adminRole->givePermissionTo('view student_profiles');
        $adminRole->givePermissionTo('create student_profiles');
        $adminRole->givePermissionTo('edit student_profiles');
        $adminRole->givePermissionTo('delete student_profiles');

        $adminRole->givePermissionTo('view teacher_profiles');
        $adminRole->givePermissionTo('create teacher_profiles');
        $adminRole->givePermissionTo('edit teacher_profiles');
        $adminRole->givePermissionTo('delete teacher_profiles');

        $adminRole->givePermissionTo('view users');
        $adminRole->givePermissionTo('create users');
        $adminRole->givePermissionTo('edit users');
        $adminRole->givePermissionTo('delete users');

        $adminRole->givePermissionTo('view academic_schedules');
        $adminRole->givePermissionTo('create academic_schedules');
        $adminRole->givePermissionTo('edit academic_schedules');
        $adminRole->givePermissionTo('delete academic_schedules');

        $adminRole->givePermissionTo('view financial_schedules');
        $adminRole->givePermissionTo('create financial_schedules');
        $adminRole->givePermissionTo('edit financial_schedules');
        $adminRole->givePermissionTo('delete financial_schedules');

        $adminRole->givePermissionTo('view financial_bills');
        $adminRole->givePermissionTo('create financial_bills');
        $adminRole->givePermissionTo('edit financial_bills');
        $adminRole->givePermissionTo('delete financial_bills');

        $superadminRole = Role::create(['name' => 'super-admin']);
        // gets all permissions via Gate::before rule

        // create demo users
        $user = User::factory()->create([
            'name' => 'Example user',
            'email' => 'student@mail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($studentRole);

        $user = User::factory()->create([
            'name' => 'Example admin user',
            'email' => 'admin@mail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($adminRole);

        $user = User::factory()->create([
            'name' => 'Example superadmin user',
            'email' => 'superadmin@mail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($superadminRole);
    }
}
