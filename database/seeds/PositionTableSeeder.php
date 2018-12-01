<?php

use Illuminate\Database\Seeder;
use App\Position;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::create([
            'name'  => 'Ketua'
        ]);

        Position::create([
            'name'  => 'Sekretaris'
        ]);

        Position::create([
            'name'  => 'Bendahara'
        ]);

        Position::create([
            'name'  => 'Koordinator Acara'
        ]);

        Position::create([
            'name'  => 'Koordinator Dana Usaha'
        ]);

        Position::create([
            'name'  => 'Koordinator Hubungan Masyarakat'
        ]);

        Position::create([
            'name'  => 'Koordinator Kesekretariatan'
        ]);

        Position::create([
            'name'  => 'Koordinator Konsumsi'
        ]);

        Position::create([
            'name'  => 'Koordinator Pertolongan Pertama Pada Kecelakaan'
        ]);

        Position::create([
            'name'  => 'Koordinator Publikasi Dekorasi dan Dokumentasi'
        ]);

        Position::create([
            'name'  => 'Koordinator Operasional'
        ]);

        Position::create([
            'name'  => 'Koordinator Technical Support'
        ]);

        Position::create([
            'name'  => 'Koordinator Transportasi'
        ]);

        Position::create([
            'name'  => 'Subkoordinator Acara'
        ]);

        Position::create([
            'name'  => 'Staff Acara'
        ]);

        Position::create([
            'name'  => 'Staff Dana Usaha'
        ]);

        Position::create([
            'name'  => 'Staff Hubungan Masyarakat'
        ]);

        Position::create([
            'name'  => 'Staff Kesekretariatan'
        ]);

        Position::create([
            'name'  => 'Staff Konsumsi'
        ]);

        Position::create([
            'name'  => 'Staff Operasional'
        ]);

        Position::create([
            'name'  => 'Staff Pertolongan Pertama Pada Kecelakaan'
        ]);

        Position::create([
            'name'  => 'Staff Publikasi Dekorasi dan Dokumentasi'
        ]);

        Position::create([
            'name'  => 'Staff Technical Support'
        ]);

        Position::create([
            'name'  => 'Staff Transportasi'
        ]);

    }
}
