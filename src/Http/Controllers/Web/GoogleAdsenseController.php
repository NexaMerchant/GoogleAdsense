<?php
namespace NexaMerchant\GoogleAdsense\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use Google_Client;
use Google_Service_Adsense;
use stdClass;

class GoogleAdsenseController extends Controller
{

    private $uid = null;

    private $client = null;
    private $service = null;

    public function __construct()
    {
        $this->client = new Google_Client();
        // $this->client->addScope('https://www.googleapis.com/auth/adsense.readonly');
        // $this->client->addScope('https://www.googleapis.com/auth/adsense');
        $this->client->addScope(config('GoogleAdsense.Scopes'));
        $this->client->setAccessType('offline');
        $this->client->setApprovalPrompt('force');
        $this->client->setAuthConfig(config('GoogleAdsense.auth_config_file'));
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