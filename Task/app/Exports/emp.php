<?php
namespace App\Exports;

use App\employe;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

class emp implements FromCollection
{
    use Exportable;

    public function collection()
    {

      $emp= employe::all()->where('deleted',2);
        return $emp;
    }
}