<?php
namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

class sliders implements FromCollection
{
    use Exportable;

    public function collection()
    {

        $slider= DB::table('access_en.en_sliders')->where('deleted','=' ,'2')->get();
        return $slider;
    }
}