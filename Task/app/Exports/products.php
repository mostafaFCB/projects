<?php
namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use App\product;

class products implements FromCollection
{
    use Exportable;

    public function collection()
    {

        $product =   product::all()->where('deleted','2');
        return $product;
    }
}