<?php

namespace App\Services;

use App\Repositories\CarRepository;
use Symfony\Component\HttpFoundation\Response;
use illuminate\Http\Request;

class CarServices
{   
    private $carDAO;

    public function __construct(CarRepository $carDAO)
    {
         $this->carDAO = $carDAO;
    }
    public function store(Request $request){
       $this->carDAO->store($request);
       return response()->json($request->all(), Response::HTTP_CREATED);
    }
    public function getAll(){
        return response()->json($this->carDAO->all());
    }

    public function update($id, Request $request){
        $car = $this->carDAO->find($id);
        $car->update($request->all());

        return response()->json("Updated");
    }

    public function destroy($id){
        $car = $this->carDAO->find($id);
        $car->delete();

        return response()->json("Deleted");
    }

    public function getCar($id){
        $car = $this->carDAO->find($id);

            if(!empty($car)){
                return response()->json($car, Response::HTTP_OK);
        }else{
            return response()->json(["error" => "Carro not found !"], Response::HTTP_BAD_REQUEST);
        }
      
    }
}