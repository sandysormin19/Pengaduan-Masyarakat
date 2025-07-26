<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportStatus extends Model
{
    protected $fillable = [
        'report_id',
        'image',
        'status',
        'description'

    ];

    public function report()
    {
        // satu status memiliki banyak laporan
        return $this->belongsTo(Report::class);
    }
}
