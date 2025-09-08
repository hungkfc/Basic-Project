<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends BasicRepository
{
    protected $fieldSearchable = [
        'name',
        'email',
    ];

    public function model()
    {
        return User::class;
    }
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }
    public function getAllAPI()
    {
        return $this->model->all();
    }
}