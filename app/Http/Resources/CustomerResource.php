<?php

namespace App\Http\Resources;

use App\Http\Services\QrcodeService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $qrcodeService=new QrcodeService();
        return [
            'name' => $this->name,
            'institution' => $this->institution,
            "profile_theme"=>$this->category->profile_theme,
            'qrcode' => $qrcodeService->saveQrCode($this->qrcode),
        ];
    }
}
