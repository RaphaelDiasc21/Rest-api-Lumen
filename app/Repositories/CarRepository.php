<?php

namespace App\Repositories;
use App\Interfaces\CrudInterface;
use Illuminate\Http\Request;
use App\Models\Cars;

class CarRepository implements CrudInterface
{
    private $model;

    public function __construct(Cars $cars)
    {
         $this->model = $cars;
    }

    public function store(Request $request)
    {
       return $this->model->create($request->all());
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function update($id, Request $request)
    {
        $car = $this->model->find($id);
        return $car->update($request->all());
    }

    public function destroy($id)
    {
        $car = $this->model->find($id);
        return $car->delete();
    }

    public function getCar($id)
    {
        return $car = $this->model->find($id);  
    }
}