<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\State;
use App\Models\District;
class AdminController extends Controller
{
    public function loginPage()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.auth.login');
    }


    public function loginProcess(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            $admin = Auth::guard('admin')->user();

            if ($admin) {
                return redirect()->route('admin.dashboard');
            }
            Auth::guard('admin')->logout();
            return redirect()->back()->withErrors([
                'message' => 'Unauthorized role or access',
            ]);
        }
        return redirect()->back()->withErrors([
            'message' => 'Invalid email or password',
        ]);
    }



    public function adminLogout(Request $request)
    {
        Auth::guard('commonUser')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('commonuser.login')->with('status', 'Successfully logged out');
    }

    public function adminDashboard(){
        if (Auth::guard('admin')->check()) {
            return view('admin.dashboard');
        }else{
            return redirect()->route('admin.auth.login')->with('status', 'Successfully logged out');

        }
    }

    public function adminindexpage(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            $user = auth()->user();

            // Initialize the announcement query
            $query = Admin::query();

            if (!empty($request->query('search'))) {
                $search = $request->query('search');
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'LIKE', '%' . $search . '%')
                      ->orWhere('number', 'LIKE', '%' . $search . '%')
                      ->orWhere('email', 'LIKE', '%' . $search . '%');
                });
            }

            // Paginate results
            $admins = $query->paginate(2);

            // Return response based on AJAX request
            if ($request->ajax()) {
                return view('admin.admin.list', ['admins' => $admins])->render();
            } else {
                return view('admin.admin.index', ['admins' => $admins]);
            }
        }

        // Handle unauthorized access
        return redirect()->route('admin.dashboard');
    }

//user -----------------------------------------------------------------------------------flow
    public function userIndexPage(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            $user = auth()->user();

            $query = Admin::query();

            if (!empty($request->query('search'))) {
                $search = $request->query('search');
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'LIKE', '%' . $search . '%')
                      ->orWhere('number', 'LIKE', '%' . $search . '%')
                      ->orWhere('email', 'LIKE', '%' . $search . '%');
                });
            }

            $admins = $query->paginate(2);

            if ($request->ajax()) {
                return view('admin.admin.list', ['admins' => $admins])->render();
            } else {
                return view('admin.admin.index', ['admins' => $admins]);
            }
        }

        return redirect()->route('admin.dashboard');
    }

//staff ----------------------------------------------------------------------------------- flow
    public function staffIndexPage(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            $user = auth()->user();

            $query = Admin::query();

            if (!empty($request->query('search'))) {
                $search = $request->query('search');
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'LIKE', '%' . $search . '%')
                      ->orWhere('number', 'LIKE', '%' . $search . '%')
                      ->orWhere('email', 'LIKE', '%' . $search . '%');
                });
            }

            $admins = $query->paginate(2);

            if ($request->ajax()) {
                return view('admin.staff.list', ['admins' => $admins])->render();
            } else {
                return view('admin.staff.index', ['admins' => $admins]);
            }
        }

        return redirect()->route('admin.dashboard');
    }


    public function addStaffPage() {
        $states = State::all()->map(function($state) {
            return [
                'id' => $state->id,
                'name' => $state->name
            ];
        });

        $cities = District::all()->map(function($city) {
            return [
                'id' => $city->id,
                'name' => $city->city,
                'state_id' => $city->state_id // Ensure this field exists in your database
            ];
        });

        return view('admin.staff.add_staff', ['states' => $states, 'cities' => $cities]);
    }



//category ----------------------------------------------------------------------------------- flow
    public function categoryIndexPage(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            $user = auth()->user();

            $query = Admin::query();

            if (!empty($request->query('search'))) {
                $search = $request->query('search');
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'LIKE', '%' . $search . '%')
                      ->orWhere('number', 'LIKE', '%' . $search . '%')
                      ->orWhere('email', 'LIKE', '%' . $search . '%');
                });
            }

            $admins = $query->paginate(2);

            if ($request->ajax()) {
                return view('admin.category.list', ['admins' => $admins])->render();
            } else {
                return view('admin.category.index', ['admins' => $admins]);
            }
        }

        return redirect()->route('admin.dashboard');
    }

//state----------------------------------------------------------------------------------- flow
      public function stateIndexPage(Request $request)
      {
          if (Auth::guard('admin')->check()) {
              $user = auth()->user();

              $query = Admin::query();

              if (!empty($request->query('search'))) {
                  $search = $request->query('search');
                  $query->where(function ($q) use ($search) {
                      $q->where('name', 'LIKE', '%' . $search . '%')
                        ->orWhere('number', 'LIKE', '%' . $search . '%')
                        ->orWhere('email', 'LIKE', '%' . $search . '%');
                  });
              }

              $admins = $query->paginate(2);

              if ($request->ajax()) {
                  return view('admin.state.list', ['admins' => $admins])->render();
              } else {
                  return view('admin.state.index', ['admins' => $admins]);
              }
          }

          return redirect()->route('admin.dashboard');
      }


//District ----------------------------------------------------------------------------------- flow
    public function districtIndexPage(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            $user = auth()->user();

            $query = Admin::query();

            if (!empty($request->query('search'))) {
                $search = $request->query('search');
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'LIKE', '%' . $search . '%')
                      ->orWhere('number', 'LIKE', '%' . $search . '%')
                      ->orWhere('email', 'LIKE', '%' . $search . '%');
                });
            }

            $admins = $query->paginate(2);

            if ($request->ajax()) {
                return view('admin.admin.list', ['admins' => $admins])->render();
            } else {
                return view('admin.admin.index', ['admins' => $admins]);
            }
        }

        return redirect()->route('admin.dashboard');
    }






}
