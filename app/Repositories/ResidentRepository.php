<?php

namespace App\Repositories;

use App\Interfaces\ResidentRepositoryInterface;
use App\Models\Resident;

class ResidentRepository implements ResidentRepositoryInterface
{
public function getAllResidents()
    {
        return Resident::all();
    }

    public function getResidentById($id)
    {
        return Resident::where('id', $id);
    }

public function createResident(array $data)
    {
        return Resident::create($data);
    }

    public function updateResident(array $data, int $id)
    {
        $resident = $this->getResidentById($id);
        return $resident->update($data);

    }
    public function deleteResident(int $id)
    {
        $resident = $this->getResidentById($id);
        return $resident->delete();
    }
    // Implementasi metode-metode untuk mengelola data warga
}