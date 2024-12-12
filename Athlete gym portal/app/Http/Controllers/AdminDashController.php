<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class AdminDashController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(5); // Adjust pagination here if needed
        $reviews = Review::latest()->take(5)->get();

        if (Auth::check()) {
            if (Auth::user()->usertype == 'user') {
                return redirect('/home');
            }
        } else {
            return redirect('/login');
        }

        return view('dashboard', compact('users', 'reviews'));
    }

    public function addUserPage()
    {
        return view('add-user');
    }

    public function newUser(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:5', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8'],
            'usertype' => 'required',
            'address' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'contract' => 'required',
            'image' => 'required|image|max:2048'
        ]);
    
        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/images'), $name_gen);
            $formFields['image_path'] = 'storage/images/' . $name_gen; // Set path to image
        }
    
        $formFields['password'] = bcrypt($formFields['password']);
        
        // Create user with all fields
        User::create($formFields);
    
        return redirect('dashboard')->with('notification', 'User created successfully!');
    }
    
    
    

    public function archiveUser(User $user)
    {
        $message = ($user->isArchived) == true ? "restored" : "archived";
        $user->update(['isArchived' => !$user->isArchived]);

        return redirect('/manage-user')->with('notification', 'You successfully ' . $message . ' the user account of ' . $user['name']);
    }

    public function editUser(User $user)
    {
        return view('edit-user', ['user' => $user]);
    }

    public function updateUserChanges(User $user, Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'contract' => 'required',
        ]);

        $user->update($formFields);
        return redirect('/manage-user')->with('notification', 'You successfully updated the user account ' . $formFields['name']);
    }

    public function deleteUser(User $user)
    {
        if ($user->reviewCount($user->id) > 0) {
            $result = $user->getUserReviews($user->id)->get();

            foreach ($result as $review) {
                $review->delete();
            }
        }

        $user->delete();
        return redirect('manage-user')->with('notification', 'You successfully deleted the user account ' . $user->name);
    }

    public function manageUserPage()
    {
        $users = User::where([['usertype', 'user'], ['isArchived', '0']])->paginate(5);
        $archived = User::where([['usertype', 'user'], ['isArchived', '1']])->paginate(5);

        return view('manage-user', ['users' => $users, 'archived' => $archived]);
    }

    public function createdAccountsPage()
    {
        $users = User::latest()->get();
        return view('created-accounts', ['users' => $users]);
    }

    public function userActivityPage()
    {
        $sessions = Session::whereNotNull('user_id')->get();
        return view('user-activity', ['sessions' => $sessions]);
    }

    public function manageReviewsPage()
    {
        $reviews = Review::latest()->paginate(5);
        return view('manage-reviews', ['reviews' => $reviews]);
    }
}
