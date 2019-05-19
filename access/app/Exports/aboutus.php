<?php
namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

class aboutus implements FromCollection
{
    use Exportable;

    public function collection()
    {

      //$counter= DB::connection('access')->table('counters')->select()->join()->where('deleted','=' ,'2')->get();
      $aboutus= DB::table('access_en.en_aboutuscontents')->join('access.aboutuscontents','access.aboutuscontents.id','=','access_en.en_aboutuscontents.aboutuscontents_id')->where('access.aboutuscontents.deleted','=' ,'2')->get();
       // $counter = DB::select('select * from access.counters JOIN access_en.en_counters on access.counters.id = access_en.en_counters.counters_id where access.counters.deleted and access_en.en_counters.deleted = 2 ');
        return $aboutus;
    }
}