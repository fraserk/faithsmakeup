<?php

class staticController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$images = Homeimage::all();
    	return View::make('static.home',compact('images'));
	}

	public function about()
	{
		return View::make('static.about');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function faq() 
	{
		return View::make('static.faq');
	}

	public function contact() 
	{
		return View::make('static.contact');
	}

	public function sendcontact()
		{
			$data = array( 

				'name'=>Input::get('name'),
				'detail'=>Input::get('detail'),
				'email' => Input::get('email'),
				'subject' => Input::get('subject')
				);
			$rules =  array(
				'name'=>'required',
				'detail'=> 'required',
				'email' =>'required|email',
				'subject' => 'required'

				);

			$v = Validator::make($data, $rules);
			if($v->fails())
			{
				return  Redirect::route('contact')->withErrors($v)->withinput();

			}
			Mail::send('static.message',$data,function($message)
			{
				//$message->from(Input::get('email'));
				$message->to('faith@faithsmakeup.com','faith')->subject('Faithsmakeup.com - Message');



			});
		return  Redirect::route('contact')->with('message','Thank You, I have receieve your message.');

		}
    public function homeimage()
    {
    	$data = Homeimage::all();
    	return View::make('static.homeimage',compact('data'));

    }


    public function dohomeimage()
	{
		$input = Input::all();
		//$category_id = Input::get('id');
        $rules = array( 'image'=>'image|mimes:jpg,gif,png,jpeg|max:2000|required') ;
        $v = Validator::make($input, $rules);

        if ($v->fails())
        {

            return Redirect::route('homepageimage')->witherrors($v);
        }
        
        
        if (Input::hasfile('image'))
        {   
            $imgwidth = getimagesize(Input::file('image'));
            $extension = Input::file('image')->getClientOriginalExtension();
            $filename = Str_random(8) .'.' . $extension;
            $image_path = $filename;
                       
            $homepageimage = new Homeimage(['name'=>$image_path]);          
			//$category = Category::find($category_id);          
            $homepageimage->save(); 

            $destinationpath = 'uploads/homepage/' ;
            Input::file('image')->move($destinationpath,$image_path);
            
            
            //$tags = 'kim';
            Cloudy::upload($destinationpath .'/' .$filename,$filename);  //send photo to cloudy
            File::delete($destinationpath .'/'  .$image_path);
           //  // temp folder
            // if($imgwidth[0] > '950') //resize image if its bigger than 350 px
            // // {
            // //     //resize the image
//           Image::make('uploads/homepage/' .$image_path)->resize(950, null, function ($constraint) {
//    													$constraint->aspectRatio();
//														})->save('uploads/homepage/thumb_' .$image_path);
//
//           Image::make('uploads/homepage/' .$image_path)->resize(300, null, function ($constraint) {
//    													$constraint->aspectRatio();
//														})->save('uploads/homepage/admin_thumb_' .$image_path);
//           File::delete($destinationpath .'/'  .$image_path);

           //create the thumbnail as usuall
       //    Image::make('uploads/'.$category_id .'/'.$portfolio_image->image_path)->resize(150,null, function($constraint){
       //    	 $constraint->aspectRatio();
   			 // $constraint->upsize();
       //    })->save('uploads/'.$category_id .'/' .$portfolio_image->thumb_path);
           return Redirect::route('homepageimage')->with('message','file uploaded');
        }
	}

	public function delhomeimage()
	{

		$image = Homeimage::find(Input::get('id'));
		$image->delete();
		$destinationpath = 'uploads/homepage/' ;
		File::delete($destinationpath .'/thumb_' .$image->name);
		File::delete($destinationpath .'/admin_thumb_' .$image->name);


		return Redirect::route('homepageimage')->with('message','Image deleted successfully');
	}

	public function blog()

	{
		$data = Blog::wherePublish(true)->orderBy('id','desc')->paginate(20);
		return View::make('static.blog',compact('data'));
	}
    public function showblog($id)
    {
        $data = Blog::find($id);
        return View::make('static.blogDetail',compact('data'));
    }




}
