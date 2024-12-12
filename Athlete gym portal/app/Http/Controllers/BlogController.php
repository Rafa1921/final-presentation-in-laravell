<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function addBlog(Request $request) {
        return view('guest.add-blog');
    }

    public function editBlog(Blog $blog)
    {
        return view('guest.edit-blog', ['blog' => $blog]);
    }

    

    public function viewBlog(Blog $blog)
    {
        if (Auth::check()) {
           $auth = array(Auth::user()->id, Auth::user()->usertype); 

        } 
        return view('guest.blog', ['blog' => $blog], ['auth' => $auth]);
    }



    public function newBlog(Request $request) {
        $formFields = $request->validate([
            'blogTitle' => 'required',
            'blogImg' => 'required|image|max:2048',
            'blogDescription' => 'required',
        ]);

        $formFields['user_id'] = Auth::user()->id;
        $formFields['blogDescription'] = stripcslashes($formFields['blogDescription']);
    
        // Handle the image upload
        if ($request->hasFile('blogImg')) {
            $image = $request->file('blogImg');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/images'), $name_gen);
            $formFields['blogImg'] = 'storage/images/' . $name_gen; // Set path to image
        }
    
        // Create user with all fields
        Blog::create($formFields);
    
        return redirect('blogs')->with('notification', 'Blog created successfully!');
    }

    public function updateBlogChanges(Blog $blog, Request $request){

        $formFields = $request->validate([
            'blogTitle' => 'required',
            'blogImg',
            'blogDescription' => 'required',
        ]);

        $formFields['blogDescription'] = stripcslashes($formFields['blogDescription']);
    
        // Handle the image upload
        if ($request->hasFile('blogImg')) {
            $image = $request->file('blogImg');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/images'), $name_gen);
            $formFields['blogImg'] = 'storage/images/' . $name_gen; // Set path to image
        }

        $blog->update($formFields);
        
        return redirect('/blogs')->with('notification', 'You successfully updated the blog, ' . $formFields['blogTitle']);
    }

    public function deleteBlog(Blog $blog){
        $blog->delete();
        return redirect('/blogs')->with('notification', 'You successfully deleted the blog, ' . $blog->blogTitle);
    }   
}
