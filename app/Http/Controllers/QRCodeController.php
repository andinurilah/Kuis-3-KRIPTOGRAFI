<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function generateQRCode()
    {
        // Ganti dengan URL yang ingin diubah menjadi QR Code
        $url = "https://www.instagram.com/ndi.dil";  
        
        // Generate QR Code
        $qrCode = QrCode::size(300)->generate($url);

        // Kirim data ke view
        return view('home.qrcode', compact('qrCode'));
    }
}