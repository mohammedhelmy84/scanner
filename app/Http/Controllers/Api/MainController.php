<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\SettingResource;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function categories(){
        $categories=Category::all();
        return successResponse("All Categories",CategoryResource::collection($categories));
    }
    public function setting(){
        $setting=Setting::first();
        return successResponse("Setting data",SettingResource::make($setting));
    }
}
