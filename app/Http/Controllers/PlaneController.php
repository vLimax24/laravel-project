<?php

namespace App\Http\Controllers; 
  
use App\Models\Plane; 
use Illuminate\Http\Request; 
  
class PlaneController extends Controller { 
  
    public function index() { 
          
        $planes = Plane::all(); 
  
        return view('planes')->with('planes', $planes); 
  
    } 
  
    // public function insert() {
    //     $plane = new Plane;
      
    //     $plane->name = "Airbus A380"; 
    //     $plane->manufacturer = "Airbus"; 
    //     $plane->year = 2008;
    //     $plane->serial_number = "1234fkfkfkfkfk56789";
    //     $plane->description = "Great plane";
    //     $plane->price = 1000000;
    //     $plane->is_available = true;
    
    //     $plane->save(); 
      
    //     echo "Insert Successful!";
    // }
      
    public function update() { 
  
        $plane = Plane::find(1); 
  
        $plane->name = "test"; 
  
        $plane->save(); 
  
        echo "Update Successful!"; 
  
    } 
      
    public function delete() { 
  
        $plane = Plane::find(1); 
  
        $plane->delete(); 
  
        echo "Delete Successful!"; 
  
    } 
} 
