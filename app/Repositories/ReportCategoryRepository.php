<?php

namespace App\Repositories;

use App\Interfaces\ReportCategoryRepositoryInterface;
use App\Models\ReportCategory;
use App\Models\User;

class ReportCategoryRepository implements ReportCategoryRepositoryInterface
{
public function getAllReportCategories()
    {
        return ReportCategory::all();
    }

    public function getReportCategoryById($id)
    {
        return ReportCategory::where('id', $id)->first();
    }

public function createReportCategory(array $data)
    {

        return ReportCategory::create($data);
    }

    public function updateReportCategory(array $data, int $id)
    {
        $ReportCategory = $this->getReportCategoryById($id);

        return $ReportCategory->update($data);

    }
    public function deleteReportCategory(int $id)
    {
        $ReportCategory = $this->getReportCategoryById($id);

        return $ReportCategory->delete();
    }
    // Implementasi metode-metode untuk mengelola data warga
}