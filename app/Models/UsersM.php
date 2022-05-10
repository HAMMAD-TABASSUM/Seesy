<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersM extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password', 'companyName', 'description', 'companyLogo', 'location', 'member', 'companyVideo'];
}
