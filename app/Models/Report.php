<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //menambahkan column tempat menampung data pada tabel Report
    protected $fillable = [
        'code',
        'resident_id',
        'report_category_id',
        'title',
        'description',
        'image',
        'lattitude',
        'longitude',
        'address',
        'user_id',
    ];
    //fungsi untuk menghubungkan model Report dengan model resident
    public function resident()
    {
        //satu laporan dimiliki oleh satu resident
        return $this->belongsTo(Resident::class);
    }
    public function category()
    {
        //satu laporan dimiliki oleh satu kategori
        return $this->belongsTo(ReportCategory::class, 'report_category_id');
    }

    public function status()
    {
        //satu laporan memiliki banyak status
        return $this->hasMany(ReportStatus::class);
    }
}
