<?php

namespace App\Models;

use CodeIgniter\Model;

class CandidateM extends Model
{
    protected $table = 'candidate';
    protected $primaryKey = 'id';
    protected $allowedFields = ['about', 'avatar', 'currentJobTitle', 'currentExperience', 'desiredJobTitle', 'desiredExperience', 'SalaryExpectation', 'skills'];
}
