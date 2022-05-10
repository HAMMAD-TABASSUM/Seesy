<?php

namespace App\Models;

use CodeIgniter\Model;

class VacancyM extends Model
{
    protected $table = 'vacancy';
    protected $primaryKey = 'id';
    protected $allowedFields = ['companyLogo', 'title', 'industry', 'location', 'salaryFrom', 'salaryTo', 'companyVideo', 'tags', 'BenefitsOfWorking', 'QuestionsForCandidates'];
}
