<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ReportCategory extends Model
{
    use SoftDeletes;
    //menambahkan column tempat menampung data pada tabel ReportCategory
    protected $fillable = [
        'name',
        'image',
    ];
    //fungsi untuk menghubungkan model ReportCategory dengan model Report
    public function reports ()
    {
        // satu kategori memiliki banyak laporan
        return $this->hasMany(Report::class, 'report_category_id');
    }
}
