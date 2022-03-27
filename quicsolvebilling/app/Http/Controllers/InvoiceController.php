<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Billingfile;
use App\Models\Company;
use App\Models\Invoice;

class InvoiceController extends Controller
{

    public function index()
    {
       $invoice['data']=Invoice::all();
       return view('admin.billing.view',$invoice);
    }
    public function create()
    {
        $billingfile = BillingFile::all();
        return view ('admin.billing.create',compact('billingfile'));
    }

    public function insert(Request $request)
    {

        $billingfile = new BillingFile();
       // $billingfile->file_name = $request->file_name;
       //$billingfile->save();
       $invoice = new Invoice();
        
      
        $invoice->invoice_no=$billingfile->rec_id;
       
        $invoice->vertical=$request->vertical;
        $invoice->claim_number=$request->claim_number;
        $invoice->state_code=$request->state_code;
        $invoice->state_name=$request->state_name;
        $invoice->gst_no=$request->gst_no;
        $invoice->rate=$request->rate;
        $invoice->total_invoice_amount=$request->total_invoice_amount;
       
        $invoice->billing_address=$request->billing_address;
        $invoice->save();
       

       return redirect('view');
    }
}