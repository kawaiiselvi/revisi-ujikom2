<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $adminRole = new Role();
        $adminRole->name="admin";
        $adminRole->display_name="Admin";
        $adminRole->save();

        $memberRole = new Role();
        $memberRole->name="member";
        $memberRole->display_name="Member";
        $memberRole->save();

        $perusahaanRole = new Role();
        $perusahaanRole->name="perusahaan";
        $perusahaanRole->display_name="Perusahaan";
        $perusahaanRole->save();

        $admin = new User();
        $admin->name="Admin GetJobs";
        $admin->email="admin@gmail.com";
        $admin->password=bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        $member = new User();
        $member->name="Member";
        $member->email="member@gmail.com";
        $member->password=bcrypt('rahasia');
        $member->save();
        $member->attachRole($memberRole);

        $perusahaan = new User();
        $perusahaan->name="Perusahaan";
        $perusahaan->email="perusahaan@gmail.com";
        $perusahaan->password=bcrypt('rahasia');
        $perusahaan->save();
        $perusahaan->attachRole($perusahaanRole);
    }
}
