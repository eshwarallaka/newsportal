<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Newstype;
use App\News;
use App\User;
use App\Userdetails;
use Input,Image,Validator,DB;
class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$user = DB::table('users')->leftjoin('users_details','users.id', '=', 'users_details.user_id')->first();
		$newstypes = Newstype::select('*')->get();
		$newslists = News::select('*')->where('created_by',Auth::user()->id)->orderby('news_id','DESC')->get();
        return view('members/index')->with('newstypes',$newstypes)->with('user',$user)->with('newslists',$newslists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	public function postnews(Request $request)
    {
		$validator = Validator::make($request->all(), [
            'news_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'news_description' => 'required',
        ]);
		if ($validator->fails()) {
            return redirect('/member/dashboard')
                        ->withErrors($validator,'post')
                        ->withInput();
        }
		
		
		
        $addnews = new News;
		$addnews->news_title = Input::get('news_title');
		$addnews->news_description = Input::get('news_description');
		$addnews->news_type_id = Input::get('news_type_id');
		$addnews->status = 'Pending';
		$addnews->created_by = Auth::user()->id;
		$addnews->modified_by = Auth::user()->id;
		$addnews->save();
		
		$news_image = Input::file('news_image');
		$filename  = time() . '.' . $news_image->getClientOriginalExtension();
		$newsrealimagepath = 'newspics/'.Auth::user()->id.'-'.$addnews->news_id.'/realimage/';
		$realpath = public_path($newsrealimagepath);
		mkdir(public_path().'/newspics/'.Auth::user()->id.'-'.$addnews->news_id.'/thumbimage/', 777, true);
		$news_thumb = '/newspics/'.Auth::user()->id.'-'.$addnews->news_id.'/thumbimage/' . $filename;
		$newsthumbimagepath = public_path().'/newspics/'.Auth::user()->id.'-'.$addnews->news_id.'/thumbimage/' . $filename;
        Image::make($news_image->getRealPath())->resize(200, 200)->save($newsthumbimagepath);
		
		//Image::make(Input::file('news_image')->getRealPath())->resize(200, 200)->save($thumbpath);
		$news_image->move($newsrealimagepath,$filename);
		
		$id = $addnews->news_id;
		
		$addnewsimage = News::where('news_id',$id)->first();
		$addnewsimage->news_image = $newsrealimagepath.'/'.$filename;
		$addnewsimage->news_thumb = $news_thumb;
		$addnewsimage->modified_by = Auth::user()->id;
		$addnewsimage->save();
		
		return redirect('/member/dashboard')->with('message','Post Added successfuylly.');
    }
	public function editpost($id)
    {
        $post = News::find($id);
		if($post->created_by != Auth::user()->id)
		{
			return redirect('/member/dashboard')->with('message',"You Don't have Access to this post");
		}
		else
		{
			$newstypes = Newstype::select('*')->get();
			return view('members/post')->with('post',$post)->with('newstypes',$newstypes);
		}
		
    }
	public function updatepost(Request $request)
    {
		$news_id = Input::get('news_id');
		
		$updatepost = News::find($news_id);
		if($updatepost->created_by != Auth::user()->id)
		{
			return redirect('member/post/'.$news_id);
		}
		else
		{
			$imagepath = $updatepost->news_image;
			$thumbpath = $updatepost->news_thumb;
			if(Input::hasFile('news_image'))
			{
				//echo '';exit;
				$validator = Validator::make($request->all(), [
				'news_image' => 'image|mimes:jpeg,png,jpg,gif,svg',
				'news_description' => 'required',
				'news_title' => 'required',
				]);
				if ($validator->fails()) {
					return redirect('member/post/'.$news_id)
								->withErrors($validator,'post')
								->withInput();
				}
				
				
				$news_image = Input::file('news_image');
				$filename  = time() . '.' . $news_image->getClientOriginalExtension();
				
				
				$thumbpath = '/newspics/'.Auth::user()->id.'-'.$news_id.'/thumbimage/' . $filename;
				$newsthumbimagepath = public_path().'/newspics/'.Auth::user()->id.'-'.$news_id.'/thumbimage/' . $filename;
				Image::make($news_image->getRealPath())->resize(200, 200)->save($newsthumbimagepath);
				
				$imagepath = 'newspics/'.Auth::user()->id.'-'.$news_id.'/realimage/'. $filename;
				$realimagepath = 'newspics/'.Auth::user()->id.'-'.$news_id.'/realimage/';
				$realpath = public_path($realimagepath);
				//Image::make(Input::file('news_image')->getRealPath())->resize(200, 200)->save($thumbpath);
				$news_image->move($realimagepath,$filename);
				
			}

			$updatepost = News::find($news_id);
			$updatepost->news_title = Input::get('news_title');
			$updatepost->news_description = Input::get('news_description');
			$updatepost->news_type_id = Input::get('news_type_id');
			$updatepost->news_image = $imagepath;
			$updatepost->news_thumb = $thumbpath;
			$updatepost->status = 'Pending';
			$updatepost->modified_by = Auth::user()->id;
			$updatepost->save();
			return redirect('member/post/'.$news_id);
			
		}
	}
	
	public function updatepassword(Request $request)
    {
		$newpswd = User::find(Auth::user()->id);
		$newpswd->password = bcrypt(Input::get('newpassword'));
		$newpswd->save();
		return redirect('/member/dashboard')->with('message','Password Updated Successfully');
	}
	public function updatedetails(Request $request)
    {
		
		$udcount = Userdetails::where('user_id',Auth::user()->id)->count();
		if($udcount>0)
		{
			$userdetail = Userdetails::where('user_id',Auth::user()->id)->first();
			$userdetail->address = Input::get('address');
			$userdetail->city = Input::get('city');
			$userdetail->state = Input::get('state');
			$userdetail->mobile = Input::get('mobile');
			$userdetail->facebook = Input::get('facebook');
			$userdetail->linkedin = Input::get('linkedin');
			$userdetail->modified_by = Auth::user()->id;
			$userdetail->save();
			
			$uname = User::find(Auth::user()->id);
			$uname->name = Input::get('name');
			$uname->save();
			
			return redirect('/member/dashboard')->with('message','Details Updated Successfully');
			
		}
		else{
			$userdetail = new Userdetails;
			$userdetail->user_id = Auth::user()->id;
			$userdetail->address = Input::get('address');
			$userdetail->city = Input::get('city');
			$userdetail->state = Input::get('state');
			$userdetail->mobile = Input::get('mobile');
			$userdetail->facebook = Input::get('facebook');
			$userdetail->linkedin = Input::get('linkedin');
			$userdetail->created_by = Auth::user()->id;
			$userdetail->modified_by = Auth::user()->id;
			$userdetail->save();
			
			$uname = User::find(Auth::user()->id);
			$uname->name = Input::get('name');
			$uname->save();
			
			return redirect('/member/dashboard')->with('message','Details Updated Successfully');
		}
	}
}
