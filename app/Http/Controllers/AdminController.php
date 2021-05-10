<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Acct;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;

class AdminController extends Controller
{
    // index page
    public function index() {
		if (auth()->check()) {
			$userid = auth()->user()->id;
			$userrole = auth()->user()->userrole;
			if ($userrole == "Admin") {
				$data = array();
				return view('admin.index')->with($data);
			} else header("Location: ../");
		} else return redirect('login');
    }

    // users page
    public function users() {
		if (auth()->check()) {
			$userid = auth()->user()->id;
			$userrole = auth()->user()->userrole;
			if ($userrole == "Admin") {
				$userslist = DB::select("select * from users");
				return view('admin.users')->with('userslist', $userslist);
			} else header("Location: ../");
		} else return redirect('login');
    }

    // customers page
    public function customers(Request $request) {
		if (auth()->check()) {
			$userid = auth()->user()->id;
			$userrole = auth()->user()->userrole;
			if ($userrole == "Admin") {
				if (!empty($request->edituserid)) $userslist = DB::select("select users.id, users.firstname, users.lastname, users.email, users.phone, users.acctmgr, customer.companyname, customer.cert_required from users, customer, AcctList where userrole='Customer' and users.customernumber = customer.id and AcctList.customernumber = customer.id and AcctList.userid = '{$request->edituserid}' order by lastname, firstname asc");
				else $userslist = DB::select("select users.id, users.firstname, users.lastname, users.email, users.phone, users.acctmgr, customer.companyname from users, customer where userrole='Customer' and users.customernumber = customer.id order by lastname, firstname asc");
				return view('admin.users')->with('userslist', $userslist);
			} else header("Location: ../");
		} else return redirect('login');
    }

    // edit user page
    public function edituser(Request $request) {
		if (auth()->check()) {
			$userid = auth()->user()->id;
			$userrole = auth()->user()->userrole;
			$edituserid = $request->edituserid;
			if ($userrole == "Admin") {
				// Generate list of available account managers...
				$managerslist = DB::select("select id, firstname, lastname from users where userrole='AcctMgr' order by lastname, firstname asc");
				$userrequest = DB::select("select image, firstname, lastname, email, userrole, phone, customernumber from users where id='$edituserid'");
				$customernumber = $userrequest[0]->customernumber;
				$companyrequest = DB::select("select companyname, cert_required from customer where id='$customernumber'");
				if (!empty($companyrequest[0]->companyname)) { 
					$companyname = $companyrequest[0]->companyname;
					$cert_required = $companyrequest[0]->cert_required;}
				else {$companyname = ""; $cert_required = 0;}
				$managerrequest = DB::select("select userid from AcctList where customernumber='$customernumber'");
				if (!empty($managerrequest[0]->userid)) $managerid = $managerrequest[0]->userid;
				else $managerid = 0;
				$data['userid'] = $edituserid;
				$data['customernumber'] = $customernumber;
				$data['userrole'] = $userrequest[0]->userrole;
				$data['company'] = $companyname;
				$data['cert_required'] = $cert_required;
				$data['managers'] = $managerslist;
				$data['manager'] = $managerid;
				$data['firstname'] = $userrequest[0]->firstname;
				$data['lastname'] = $userrequest[0]->lastname;
				$data['email'] = $userrequest[0]->email;
				$data['phone'] = $userrequest[0]->phone;
				return view('admin.edituser')->with($data);
			} else header("Location: ../");
		} else return redirect('login');
    }


    // add user page
    public function adduser(Request $request) {
		if (auth()->check()) {
			$userid = auth()->user()->id;
			$userrole = auth()->user()->userrole;
			if ($userrole == "Admin") {
				// Generate list of available account managers...
				$managerslist = DB::select("select id, firstname, lastname from users where userrole='AcctMgr' order by lastname, firstname asc");
				$data['userid'] = 0;
				$data['customernumber'] = 0;
				$data['userrole'] = '';
				$data['company'] = '';
				$data['managers'] = $managerslist;
				$data['manager'] = 0;
				$data['firstname'] = '';
				$data['lastname'] = '';
				$data['email'] = '';
				$data['phone'] = '';
				return view('admin.edituser')->with($data);
			} else header("Location: ../");
		} else return redirect('login');
    }

    // remove user page
    public function removeuser(Request $request) {
		if (auth()->check()) {
			$userid = auth()->user()->id;
			$userrole = auth()->user()->userrole;
			$edituserid = $request->edituserid;
			if ($userrole == "Admin") {
				$userrequest = DB::select("select * from users where id='$edituserid'");
				$data['userid'] = $edituserid;
				$data['firstname'] = $userrequest[0]->firstname;
				$data['lastname'] = $userrequest[0]->lastname;
				$data['email'] = $userrequest[0]->email;
				return view('admin.removeuser')->with($data);
			} else header("Location: ../");
		} else return redirect('login');
    }

    // remove user
    public function deleteuser(Request $request) {
		if ($request->confirm == "no") return redirect('admin');
		else {
			if (auth()->check()) {
				$userid = auth()->user()->id;
				$userrole = auth()->user()->userrole;
				$edituserid = $request->edituserid;
				if ($userrole == "Admin") {
					DB::table('users')->where('id', $edituserid)->delete();
					$data['message'] = "User successfully removed!";
					return view('admin.removeuser')->with($data);
				} else header("Location: ../");
			} else return redirect('login');
		}
    }

    // udate user
    public function updateuser(Request $request) {
		if (auth()->check()) {
			$userid = auth()->user()->id;
			$userrole = auth()->user()->userrole;
			$edituserid = $request->edituserid;
			if ($userrole == "Admin") {

				if ($edituserid == 0) {

					// Generate a username...
					$username = substr($request->firstname, 0, 1).$request->lastname;

					// Generate a default password...
					$password = substr($request->firstname, 0, 1).substr($request->lastname, 0, 1)."000000";

					// Get current time...
					$now = date("Y-m-d H:i:s", time());

					// Store new user data...
					if (!empty($request->firstname) && !empty($request->lastname) && !empty($request->email) && !empty($request->phone) && !empty($request->userrole)) {
						$edituserid = DB::table('users')->insertGetId(
							array('firstname' => $request->firstname, 'lastname' => $request->lastname, 'email' => $request->email,
							'phone' => $request->phone, 'username' => $username, 'userrole' => $request->userrole,
							'email_verified_at' => $now, 'created_at' => $now, 'updated_at' => $now, 'password' => $password)
						);
					}

				} else {

					// Store updated user data...
					if (!empty($request->firstname) && !empty($request->lastname) && !empty($request->email) && !empty($request->phone) && !empty($request->userrole)) {

						$updateDetails = [
							'firstname' => $request->firstname,
							'lastname' => $request->lastname,
							'email' => $request->email,
							'phone' => $request->phone,
							'userrole' => $request->userrole
						];

						DB::table('users')->where('id', $edituserid)->update($updateDetails);
					}
				}

				// Store updated company name...
				if (!empty($request->company)) {
					if ($request->edituserid == 0) {
						$checkcompany = DB::select("select companyname from customer where id='{$request->customernumber}'");
						if (empty($checkcompany)) 
							DB::table('customer')->insert(
								array('companyname' => $request->company, 
										'id' => $request->customernumber,
										'cert_required' => $request->cert_required
									)
								);
					} else {
						DB::table('customer')->where('id', $request->customernumber)->update(['companyname' => $request->company,
									'cert_required' => $request->cert_required]);
					}
				}

				// Store updated password...
				if (!empty($request->password)) {
					$newpass = Hash::make($request->password);
					DB::table('users')->where('id', $edituserid)->update(['password' => $newpass]);
				}

				// Store updated customer number...
				if (!empty($request->customernumber)) {
					DB::table('users')->where('id', $edituserid)->update(['customernumber' => $request->customernumber]);
				}

				// Store updated account manager for customer...
				if (!empty($request->acctmgr) && !empty($request->customernumber)) {
					$acctcheck = DB::select("select userid from AcctList where customernumber='{$request->customernumber}'");
					if (empty($acctcheck)) DB::table('AcctList')->insert(array('userid' => $request->acctmgr, 'customernumber'=> $request->customernumber));
					else DB::table('AcctList')->where('customernumber', $request->customernumber)->update(['userid' => $request->acctmgr]);

					// Update account manager name in users table...
					$manager = DB::select("select firstname, lastname from users where id='{$request->acctmgr}'");
					$managername = $manager[0]->firstname." ".$manager[0]->lastname;
					DB::table('users')->where('customernumber', $request->customernumber)->update(['acctmgr' => $managername]);
				}

				// Store uploaded image file...
				if($request->hasFile('imagefile')) {
					$file = $request->file('imagefile');
					$path = substr(public_path(), 0, -7) . '/resources/images/acctmgrs';
					$uploadresult = $file->move($path,$file->getClientOriginalName());
					DB::table('users')->where('id', $edituserid)->update(['image' => $file->getClientOriginalName()]);
				}

				// Store uploaded pricing file...
				if($request->hasFile('pricingfile')) {
					$file = $request->file('pricingfile');
					$path = substr(public_path(), 0, -7) . '/-PRICE';
					$uploadresult = $file->move($path,$file->getClientOriginalName());
					DB::table('users')->where('id', $edituserid)->update(['pricingfile' => $file->getClientOriginalName()]);
				}

				if (!empty($request->customernumber)) return redirect('admin/customers');
				else return redirect('admin/users');

			} else return redirect('admin');
		} else return redirect('login');
    }

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function paginate($items, $perPage = 20, $page = null, $options = [])

    {

        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);

    }
}
