<?php

namespace App\Repositories;

use App\Interfaces\ResidentRepositoryInterface;
use App\Models\Resident;
use App\Models\User;

class ResidentRepository implements ResidentRepositoryInterface
{
public function getAllResidents()
    {
        return Resident::all();
    }

    public function getResidentById($id)
    {
        return Resident::where('id', $id)->first();
    }

public function createResident(array $data)
    {
        $user = User::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'password'=> bcrypt($data['password'])
        ]);
        return $user->resident()->create($data);
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