<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    //menambahkan column tempat menampung data pada tabel Resident
    protected $fillable =[
        'user_id',
        'avatar',
    ];
    //fungsi untuk menghubungkan model Resident dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //fungsi untuk menghubungkan model Resident dengan model Report
public function reports()
    {
        //satu resident memiliki banyak laporan
        return $this->hasMany(Report::class);
    }

}
