<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{

    protected $table            = 'posts';
    protected $primaryKey       = 'post_id';
    // protected $useAutoIncrement = true;
    // protected $returnType       = 'array';
    // protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = ['post_title', 'post_content'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    //this will create the time in which we will have our 
    protected $createdField  = 'post_created_at';
    protected $updatedField  = 'post_updated_at';
    // protected $deletedField  = 'deleted_at';

    // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // Callbacks or events
//     protected $allowCallbacks = true;
//beforeInsert is a model event
    protected $beforeInsert   = ['checkName'];
//     protected $afterInsert    = [];
//     protected $beforeUpdate   = [];
//     protected $afterUpdate    = [];
//     protected $beforeFind     = [];
//     protected $afterFind      = [];
//     protected $beforeDelete   = [];
//     protected $afterDelete    = [];

//this create a function that hashes our password by default

// public function hashPassword(array $data){
//     $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
//     return $data;
// }

// this function will add the extra features to data
// everytime we input data to the database
    public function checkName(array $data){
        $newTitle = $data['data']['post_title'].' Extra Features';
        $data['data']['post_title'] = $newTitle;

        return $data;
    }
}
