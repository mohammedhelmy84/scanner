<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customers\LoginRequest;
use App\Http\Resources\CustomerResource;
use App\Http\Services\PdfService;
use App\Mail\SendPdfMail;
use App\Models\Customer;
use Illuminate\Support\Facades\Mail;


class  LoginController extends Controller
{
    public function __invoke(LoginRequest $request)
    {
        $qrCode=$request->qrcode;

        $customer=Customer::where('qrcode','=',$qrCode)->first();

        if(!$customer){
            return failResponse("Not Found Data");
        }

        return successResponse("Login Successfully!");
    }
}
