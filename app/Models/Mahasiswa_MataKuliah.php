<?php

namespace App\Models;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Mahasiswa_MataKuliah extends Pivot
{
    use HasFactory;
    protected $table = 'mahasiswa_matakuliah';
    protected $primaryKey = 'id';
    // protected $fillable = [
    //     'Nilai',
    //     'mahasiswa_id',
    //     'matakuliah_id',
    // ];

    public function matakuliah()
    {
        return $this->belongsTo(MataKuliah::class);
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function mhs_matkul()
    {
        return $this->belongsToMany(Mahasiswa::class, Mahasiswa_MataKuliah::class, 'mahasiswa_id', 'matakuliah_id')-> withPivot('nilai');
    }
}


