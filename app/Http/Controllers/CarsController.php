<?php


    namespace App\Http\Controllers;

use App\Models\Cars;
use App\Repositories\CarRepository;
use App\Services\CarServices;
use Illuminate\Http\Request;

class CarsController extends Controller
    {   
        private $CarsServices;

        public function __construct(CarServices $carServices)
        {
            $this->CarsServices = $carServices;
        }

        public function store(Request $request){
           
           $this->CarsServices->store($request);
        }
        public function getAll(){
            return response()->json($this->model->all());
        }

        public function update($id, Request $request){
            $car = $this->model->find($id);
            $car->update($request->all());

            return response()->json("Updated");
        }

        public function destroy($id){
            $car = $this->model->find($id);
            $car->delete();

            return response()->json("Deleted");
        }

        public function getCar($id){
            $car = $this->model->find($id);

                if(!empty($car)){
                    return response()->json($car, Response::HTTP_OK);
            }else{
                return response()->json(["error" => "Carro not found !"], Response::HTTP_BAD_REQUEST);
            }
          
        }
    }