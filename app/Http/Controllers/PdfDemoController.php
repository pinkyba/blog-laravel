<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;
use App\Rabbit;
use PDF;

class PdfDemoController extends Controller
{
    
    public function exportPdf()
    {
        // $view = \View::make('test');
        // $html = $view->render();
        
        //$pdf = new TCPDF();
        PDF::SetTitle('Test');
        PDF::AddPage();

        //$html = $this->uni2zawgyi('မြန်မာစာ');
        //print($html);
        PDF::writeHTML('သီဟိုဠ္မွ ဉာဏ္ႀကီးရွင္သည္ အာယုဝၯနေဆးၫႊန္းစာကို ဇလြန္ေဈးေဘး ဗာဒံပင္ထက္ အဓိ႒ာန္လ်က္ ဂဃနဏဖတ္ခဲ့သည္။');
        PDF::Output('hello_world.pdf');
    }

    public function uni2zawgyi($str){
        return Rabbit::uni2zg($str);
    }
}
