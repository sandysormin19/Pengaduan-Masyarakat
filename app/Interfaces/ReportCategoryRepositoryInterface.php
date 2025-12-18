<?php

namespace App\Interfaces;

interface ReportCategoryRepositoryInterface
{
    public function getAllReportCategories();
    public function getReportCategoryById(int $id);
    public function createReportCategory(array $data);
    public function updateReportCategory(array $data, int $id);
    public function deleteReportCategory(int $id);
}