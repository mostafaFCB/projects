<?php
namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use App\supplayer;

class supplayers implements FromCollection
{
    use Exportable;

    public function collection()
    {
        $supplayers =   supplayer::all()->where('deleted','2');

        return $supplayers;
    }
}