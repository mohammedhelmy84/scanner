<?php

namespace App\Http\Services;
use App\Models\Setting;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;
use Illuminate\Support\Facades\Storage;

class QrcodeService
{
    protected $writer;

    function __construct()
    {
        $this->writer = new PngWriter();
    }
    public function generateQrCode($qrCode)
    {
        $qrCode = new QrCode(
            data:$qrCode,
            encoding: new Encoding('UTF-8'),
            errorCorrectionLevel: ErrorCorrectionLevel::Low,
            size: 300,
            margin: 10,
            roundBlockSizeMode: RoundBlockSizeMode::Margin,
            foregroundColor: new Color(0, 0, 0),
            backgroundColor: new Color(255, 255, 255)
        );

        return $qrCode;
    }
    public function generateLogo()
    {
        $logo = Setting::first()->logo;

        $logo = new Logo(
            path: public_path("/storage/setting/$logo"),
            resizeToWidth:300,
            punchoutBackground: true
        );

        return $logo;
    }
    public function generateLabel()
    {
        $label = new Label(
            text: 'Scan the code',
            textColor: new Color(255, 0, 0)
        );
        return $label;
    }
    public function saveQrCode($qrCode)
    {
        $result= $this->writer->write($this->generateQrCode($qrCode),label:$this->generateLabel());

        $qrCodeImage =uniqid().".png";

        $result->saveToFile(storage_path("app/public/qrcodes/$qrCodeImage"));

        $dataUri =Storage::url("/qrcodes/$qrCodeImage");

        return $dataUri;
    }

}
