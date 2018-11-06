<?php

namespace App\Repositories\Eloquents;

use App\User;
use App\Repositories\Interfaces\UserRepository;

class DbUserRepository extends DbBaseRepository implements UserRepository
{
    protected $model;

    /**
     *  @param User $model
     *
     */
    function __construct(User $model)
    {
        $this->model = $model;
    }

    public function getAll($per)
    {
        // TODO: Implement getAll() method.
    }

    public function create($param)
    {
        return $this->baseCreate($param);
    }

    public function get($key, $value)
    {
        return $this->baseFindBy($key, $value);
    }

    public function update($data, $key, $value)
    {
        return $this->baseUpdate($data, $key, $value);
    }

    public function delete($key, $value)
    {
        // TODO: Implement delete() method.
    }

    public function searchCompanyByName($keyword)
    {
        return $this->model->where('name', 'like', '%' . $keyword . '%' )->get();
    }

    public function getCompanyByStatus(int $statusCode, int $roleId, $columns)
    {
        return $this->model::where('status', $statusCode)->where('role_id', $roleId)->get($columns);
    }
}
