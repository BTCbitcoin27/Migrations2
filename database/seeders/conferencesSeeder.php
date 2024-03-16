<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\conferences;

class conferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conference = new conferences();
        $conference->conference_name = 'AFC';
        $conference->conference_logo = 'afc.png';
        $conference->superbowl_titles_in_conference = 26;
        $conference->save();

        $conference = new conferences();
        $conference->conference_name = 'NFC';
        $conference->conference_logo = 'nfc.png';
        $conference->superbowl_titles_in_conference = 27;
        $conference->save();
    }
}
