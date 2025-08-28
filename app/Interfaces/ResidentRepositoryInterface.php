<?php

namespace App\Interfaces;

interface ResidentRepositoryInterface
{
    public function getAllResidents();
    public function getResidentById($id);
    public function createResident(array $data);
    public function updateResident(array $data, int $id);
    public function deleteResident(int $id);
}