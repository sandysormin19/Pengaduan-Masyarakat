<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportStatus extends Model
{
     //menambahkan column tempat menampung data pada tabel ReportStatus
    protected $fillable = [
        'report_id',
        'image',
        'status',
        'description'

    ];
    //fungsi untuk menghubungkan model ReportStatus dengan model Report
    public function report()
    {
        // satu status memiliki banyak laporan
        return $this->belongsTo(Report::class);
    }
}
