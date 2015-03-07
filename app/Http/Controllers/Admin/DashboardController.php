<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lib\Prototype\DbClasses\Eloquent\EloquentUserRepository;

use Illuminate\Http\Request;
use Session;

class DashboardController extends Controller {

	protected $userRepo;

	public function __construct(EloquentUserRepository $userRepo){
		// $this->middleware('auth');
		$this->userRepo = $userRepo;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		Session::put('user_login_id', '1');		//Only For test - User logined

		$permissions = $this->userRepo->getPermission();

		return view('dashboard.dashboard')->with('permissions', $permissions);
	}

	

}
