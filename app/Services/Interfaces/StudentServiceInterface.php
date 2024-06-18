<?php

namespace App\Services\Interfaces;

use Illuminate\Http\Request;

interface StudentServiceInterface
{
    public function getAllStudent();
    public function getStudentById($id);
    public function create(Request $request);
    public function update(Request $request, $id);
    public function delete($id);
}
