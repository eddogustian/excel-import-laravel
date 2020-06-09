<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow; 

class ProductsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            //
            'title' => $row['title'],
            'slug' => str_slug($row['title']),
            'description' => $row['description'],
            'price' => $row['price'],
            'stock' => $row['stock']
        ]);
    }

    //limit chunksize
    public function chunkSize(): int 
    {
        return 1000;  //angka terebut pertanda jumlah baris yang akan dieksekusi {skat}
    }
}
