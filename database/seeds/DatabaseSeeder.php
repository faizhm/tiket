<?php

use Illuminate\Database\Seeder;
use App\Pesanan;
use App\Peserta;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\User;
        $admin->name = "administrator";
        $admin->email = "admin@gmail.com";
        $admin->password = \Hash::make("admin123");
        $admin->role = "1";
        $admin->save();
        $this->command->info("Admin berhasil ditambah");

        // User::insert([

        //     'role' =>  1,
        //     'name' => 'faiz',
        //     'email' => 'faizemail',
        //     'password' => 'faiz',

        // ]);
        // Pesanan::insert([
        //     'tanggal' => '2021-01-23',
        //     'asal_sekolah' =>  'SD 2',
        //     'jumlah_peserta' => '1',
        //     'status' => 'pending',
        //     'id_user' => '1',
        // ]);
        // Peserta::insert(
        //     [
        //         'nama' => 'faiz3',
        //         'email' =>  'faiz3@email',
        //         'alamat' => 'new york',
        //         'usia' => '30',
        //         'jenis_kelamin' => 'L',
        //         'no_telpon' => '083',
        //         'id_pesanan' => '3',
        //     ]
        // );
    }
}
