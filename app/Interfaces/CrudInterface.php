<?php

namespace App\Interfaces;
use Illuminate\Http\Request;

interface CrudInterface
    {
        public function store(Request $request);
 
         public function destroy($id);

         public function getCar($id);

         public function getAll();

         public function update($id, Request $request);
    }