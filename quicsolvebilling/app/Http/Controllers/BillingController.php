<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Billingfile;
use App\Models\Company;
class BillingController extends Controller
{
    public function index()
    {
        //echo("hii");exit;
        $billingfile['data']  = Company::join('billing_files', 'companies.rec_id', '=', 'billing_files.company_id')->get();
       // print_r($billingfile);exit;   	
        return view ('admin.billing.index',$billingfile);
        
       //return view ('admin.billing.index',compact('billingfile'));
    }
    public function add()
    {  // echo("hii");exit;
        $company = Company::all();
     return view('admin.billing.add',compact('company'));

    }
    public function insert(Request $request)
    {    
        //print_r($request->all()); exit;
        $company = new Company();
        
       
        $company->company_name = $request->company_name;
       
       $company->save();
       //print_r($company);exit;
  
        //print_r($request->all()); exit;
       
       $billingfile = new Billingfile();
       
       if($request->hasFile('filename'))
        {   
           
            $file=$request->file('filename');
            $ext=$file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file->move('assets/uploads/billing',$filename);
            
            $billingfile->file_name =$filename;
            
        }
        //echo("hii"); exit;
      
       
        $billingfile->company_id=$company->rec_id;

        $billingfile->invoice_date = $request->invoice_date;
        $billingfile->kind_attention = $request->kind_attn;
       // $billingfile->Invoice_Number_part_1= $request->=;
        //$billingfile->Invoice_Number_part_2= $request->;
        //$billingfile->Invoice_Number_part_3= $request->;
        $billingfile->save();
      return redirect('billinglist');
    }
       
    public function view(){
    
        return view('admin.billing.view');
    }


    public function destroy(Request $request,$rec_id)
    {
        $billingfile=BillingFile::find($rec_id);
        $billingfile->delete();
      

        return redirect('billing-list');
    }

    
  
    
}
