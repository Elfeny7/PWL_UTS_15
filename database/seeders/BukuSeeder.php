<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'kode_buku' => 2,
            'judul' => 'Sword Art Online 2',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 3,
            'judul' => 'Sword Art Online 3',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 4,
            'judul' => 'Sword Art Online 4',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 5,
            'judul' => 'Sword Art Online 5',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 6,
            'judul' => 'Sword Art Online 6',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 7,
            'judul' => 'Sword Art Online 7',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 8,
            'judul' => 'Sword Art Online 8',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 9,
            'judul' => 'Sword Art Online 9',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 10,
            'judul' => 'Sword Art Online 10',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 11,
            'judul' => 'Sword Art Online 11',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 12,
            'judul' => 'Sword Art Online 12',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 13,
            'judul' => 'Sword Art Online 13',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 14,
            'judul' => 'Sword Art Online 14',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 15,
            'judul' => 'Sword Art Online 15',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 16,
            'judul' => 'Sword Art Online 16',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 17,
            'judul' => 'Sword Art Online 17',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 18,
            'judul' => 'Sword Art Online 18',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 19,
            'judul' => 'Sword Art Online 19',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 20,
            'judul' => 'Sword Art Online 20',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],
        [
            'kode_buku' => 21,
            'judul' => 'Sword Art Online 21',
            'pengarang' => 'Reki Kawahara',
            'jenis_buku' => 'Light Novel',
            'harga' => '100000',
            'qty' => '50',
        ],

        ];
        DB::table('books')->insert($data);
    }
}
