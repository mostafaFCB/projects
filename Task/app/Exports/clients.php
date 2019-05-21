<?php
namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

class clients implements FromCollection
{
    use Exportable;

    public function collection()
    {

        $clients = DB::table('clients')->join('products','products.id','=','product_id')->where('products.deleted',2)->where('products.status',2)->get();
        return $clients;
    }
}