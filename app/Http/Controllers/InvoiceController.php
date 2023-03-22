<?php

namespace App\Http\Controllers;

use App\Models\BloodTest;
use App\Models\BloodWithdraw;
use App\Models\DoctorTest;
use App\Models\Donation;
use App\Models\Investigation;
use App\Models\Kid;
use App\Models\Order;
use App\Models\Polycythemia;
use App\Models\ViralTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class InvoiceController extends Controller
{
    

    public function donatiosCheck()
    {
        return view('invoices.donatios-check');

    }

    public function viralDiseases(Request $request)
    {
        return view('invoices.donersCheck');
    }

    public function printOrder($id)
    {
        return view('invoices.order-invoice');
    }

    public function printPolcythemias($id)
    {
        return view('invoices.Polcythemias-invoice');
    }

    public function donersWithDraw(Request $request)
    {
      
        return view('invoices.doners-with-draw-invoice');
    }

    public function ExclusionFromTheDoctor(Request $request)
    {
        return view('invoices.exclusion-from-the-doctor');
    }

    public function polcythemiasrReport(Request $request)
    {
        return view('invoices.polcythemias-report');
    }

    public function BloodDischarged(Request $request)
    {
        return view('invoices.BloodDischarged');
    }

    public function kidInvoice($id)
    {
        return view('invoices.kidInvoice');
    }

    public function investigationsInvoice($id)
    {

        return view('invoices.investigationInvoice');
    }
}
