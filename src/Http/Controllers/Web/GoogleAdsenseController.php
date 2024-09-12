<?php
namespace NexaMerchant\GoogleAdsense\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class GoogleAdsenseController extends Controller
{

    private $uid = null;

    private $client = null;
    private $service = null;

    public function __construct()
    {
        $this->client = new Google_Client();
        $this->client->addScope('https://www.googleapis.com/auth/adsense.readonly');
        $this->client->addScope('https://www.googleapis.com/auth/adsense');
        $this->client->setAccessType('offline');
        $this->client->setApprovalPrompt('force');
        $this->client->setAuthConfig(storage_path('app/client_secret_33839582772-7bqi2gto92jms75ujbhvfo22je2haold.apps.googleusercontent.com.json'));
    }

    public function index()
    {
        return view('googleadsense::index');
    }

    public function callback($uid)
    {

        $this->uid = $uid;

        return view('googleadsense::callback', compact('uid'));
    }
}