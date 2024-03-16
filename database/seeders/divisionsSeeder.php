<?php

namespace Database\Seeders;

use App\Models\divisions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class divisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $division = new divisions();
        $division->division_name = 'AFC East';
        $division->superbowl_titles_in_division = 11;
        $division->division_logo = 'afceast.png';
        $division->save();

        $division = new divisions();
        $division->division_name = 'AFC North';
        $division->superbowl_titles_in_division = 9;
        $division->division_logo = 'afcnorth.png';
        $division->save();

        $division = new divisions();
        $division->division_name = 'AFC South';
        $division->superbowl_titles_in_division = 4;
        $division->division_logo = 'afcsouth.png';
        $division->save();

        $division = new divisions();
        $division->division_name = 'AFC West';
        $division->superbowl_titles_in_division = 2;
        $division->division_logo = 'afcwest.png';
        $division->save();

        $division = new divisions();
        $division->division_name = 'NFC East';
        $division->superbowl_titles_in_division = 5;
        $division->division_logo = 'nfceast.png';
        $division->save();

        $division = new divisions();
        $division->division_name = 'NFC North';
        $division->superbowl_titles_in_division = 13;
        $division->division_logo = 'nfcnorth.png';
        $division->save();

        $division = new divisions();
        $division->division_name = 'NFC South';
        $division->superbowl_titles_in_division = 1;
        $division->division_logo = 'nfcsouth.png';
        $division->save();

        $division = new divisions();
        $division->division_name = 'NFC West';
        $division->superbowl_titles_in_division = 7;
        $division->division_logo = 'nfcwest.png';
        $division->save();
    }
}
