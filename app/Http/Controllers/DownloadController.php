<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    //


    public function downloadPdf1()
    {

        $pdfPath = storage_path('app/public/Downlods/Application_for_obtaining_disaster_relief_(Sinhala).pdf'); // Replace with the actual path to your PDF
        return response()->download($pdfPath, 'Application_for_obtaining_disaster_relief_(Sinhala).pdf');
    }

    public function downloadPdf2()
    {

        $pdfPath = storage_path('app/public/Downlods/Officers_of_Management_Service_Officer_Service_(Administrative_Division).pdf'); // Replace with the actual path to your PDF
        return response()->download($pdfPath, 'Officers_of_Management_Service_Officer_Service_(Administrative_Division).pdf');
    }


    public function downloadPdf3()
    {

        $pdfPath = storage_path('app/public/Downlods/Officers_of_Management_Service_Officer_Service_(Administrative_Division)_VIII.pdf'); // Replace with the actual path to your PDF
        return response()->download($pdfPath, 'Officers_of_Management_Service_Officer_Service_(Administrative_Division)_VIII.pdf');
    }


}
