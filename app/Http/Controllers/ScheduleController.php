<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\ScheduleRequest;
use App\Models\schedule;

class ScheduleController extends Controller
{
  public function register(ScheduleRequest $request) {
        
    $data = $request->all();
    Schedule::create($data);

  }

  public function popoti(Request $request) {
   
   $arr = array(
     'usuario' => $request->get('usuario'),
     'primeira_entrada' => $request->get('primeira_entrada')
   );
   return json_encode($arr);
    


  }


}
