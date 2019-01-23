<?php


namespace App\Http\Controllers\Common;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    var $now = '';
     
    public function __construct()
    {
        $this->setTimeZone();
        $this->now = date('Y-m-d H:i:s');
    }
    
    function setTimeZone()
    {
        return date_default_timezone_set(config('app.timezone'));
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function showDashboard()
    {
        echo "hi";
    }
    
    /**
     * Show the Profile page
     *
     * @return Response
     */
    
    
    
}
