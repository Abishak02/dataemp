<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  
use App\Models\employe_date;
use Yajra\DataTables\DataTables;
class practController extends Controller
{


    public function formsumit(Request $request) {
      if(isset($_POST))

      {
      DB::table('employe_date')->Insert([
       
        'name' => $request['Name'],
        'email' =>$request['email'],
        'phone' => $request['Phone'],
        'gender'=> $request['Gender']
      
]);
return redirect('index');
      }
        }
        public function index_details()
        {		
       //   check_permission(27);
              
          return view('regview');
        }
        public function get_registration()
        {
         // check_permission(27);
      
          $page = employe_date::selectRaw("id, name, email, phone, gender")->orderByDesc('id')->get();	
        // dd($page); 
             return Datatables::of($page)->addIndexColumn()->addColumn('action', function($row){
         
                              $btn = '<a href="edit_registration_details/'.$row->id.'" class="edit btn btn-primary btn-sm" title="View"><button>Edit</button></a>';
      
                  $btn .= '<a href="registration_remove/'.$row->id.'" class="edit btn btn-primary btn-sm" title="Edit"><button>delete</button></a>';
      
                  //$btn .= '<a href="mann_ki_baat_remove/'.$row->id.'" class="edit btn btn-danger btn-sm" title="Click to delete"> <i class="fa fa-trash font-weight-bold"></i></a>';	
      
                              return $btn;
      
                          })->make(true);
        }
      
        public function edit_empoye_reg(Request $request){
         
     
      $data['register'] = employe_date::where('id',$request->segment(2))->first();
  
      if(!isset($data['register']))
      {
        return redirect('registration_management');
      }		
      $data['type_of_registration'] = 0;
    
  //dd($data);
          return view("edit_registration_details",$data);
      }
  
      public function edit_student_reg_update(Request $request)
      {
      
        $reg_data = $request->all();
	

        if(isset($reg_data['submit']))
        {
            $data = $request->all();
    

			// dd("123");
          
			                $date = date('Y-m-d h:i:s');
                            $upd['name'] = $request->Name;
                            $upd['email'] = $request->email;
							$upd['phone']= $request->Phone;
                            $upd['gender'] = $request->gender;
                          

                            $upd['id'] = $request->id;
                            // dd($upd);

            
            //  dd($upd);
                        $ins = employe_date::where('id',$request->id)->update($upd);
                        return redirect('reg_details_index');
    }
  }
  public function student_delete(Request $request)
	{
		
		$status = $request->segment(3);

		$where['id'] = $request->segment(2);
		$delete = employe_date::where($where)->delete();

		if($delete)
		{
      return redirect('reg_details_index');
	}
aaaaaa
}
}
