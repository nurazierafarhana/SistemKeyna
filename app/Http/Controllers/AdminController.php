<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Show login form for admin
    public function showLoginForm()
    {
        return view('auth.admin-login'); // Your login view
    }

    // Handle admin login
    public function login(Request $request)
    {
        // Define fixed admin username and password
        $adminUsername = 'keynacafe'; // Replace with your fixed username
        $adminPassword = '123'; // Replace with your fixed password

        // Validate the input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Check if the entered username and password match the fixed credentials
        if ($request->username == $adminUsername && $request->password == $adminPassword) {
            // You can login a specific admin user by ID, or you can just redirect to the dashboard
            Auth::loginUsingId(1); // Assumes admin user has ID = 1

            return redirect()->route('admin.dashboard'); // Redirect to admin dashboard
        } else {
            // If credentials don't match, return an error
            return back()->withErrors([
                'username' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    // Admin dashboard
    public function dashboard()
    {
        return view('dashboardadmin'); // Your admin dashboard view
    }
}
