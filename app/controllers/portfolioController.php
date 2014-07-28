<?php

class portfolioController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

    public function upload($id)
    {	

    	
    	$data = Category::find(Request::segment('3')); 
    	$images = $data->portfolio()->orderBy('id','desc')->paginate('30');
    	//$cat = $category->gig()->orderBy('id','desc')->paginate(16);
    	//dd($images->toarray());
    	return View::make('portfolios.upload',compact('data','images'));
    }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$category_id = Input::get('id');
        $rules = array( 'image'=>'image|mimes:jpg,gif,png,jpeg|max:2000|required') ;
        $v = Validator::make($input, $rules);

        if ($v->fails())
        {

            return Redirect::route('imageupload',$category_id)->witherrors($v);
        }
        
        
        if (Input::hasfile('image'))
        {   
            $imgwidth = getimagesize(Input::file('image'));
            $extension = Input::file('image')->getClientOriginalExtension();
            $filename = Str_random(8) .'.' . $extension;
            $image_path = $filename;
                       
            $portfolio_image = new Portfolio(['image_path'=>$image_path,'thumb_path'=> '_thumb' .$image_path,'note'=>Input::get('note')]);          
			$category = Category::find($category_id);          
            $category->portfolio()->save($portfolio_image); 

            $destinationpath = 'uploads/'.$category_id ;
            Input::file('image')->move($destinationpath,$filename);

            //$tags = 'kim';
            Cloudy::upload($destinationpath .'/' .$filename,$filename);  //send photo to cloudy
            File::deletedirectory($destinationpath); // temp folder
            // if($imgwidth[0] > '340') //resize image if its bigger than 350 px
            // // {
            // //     //resize the image
          // Image::make('uploads/'.$category_id .'/'.$portfolio_image->image_path)->resize(678, 350)->save('uploads/'.$category_id .'/' .$portfolio_image->image_path);

           //create the thumbnail as usuall
//          Image::make('uploads/'.$category_id .'/'.$portfolio_image->image_path)->resize(150,null, function($constraint){
//          	 $constraint->aspectRatio();
//   			 $constraint->upsize();
//          })->save('uploads/'.$category_id .'/' .$portfolio_image->thumb_path);
           return Redirect::route('imageupload',$category_id)->with('message','file uploaded');
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data = Category::with('portfolio')->find($id); 
		$images = $data->portfolio()->orderBy('id','desc')->get();
		return View::make('portfolios.show',compact('data','images'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$image = Portfolio::find($id);
		$album = Category::find($image->category_id);
		$destinationpath = 'uploads/'.$album->id .'/' .$image->image_path ;
		$destinationpath2 = 'uploads/'.$album->id .'/' .$image->thumb_path ;
		File::delete($destinationpath);
		File::delete($destinationpath2); // temp folder
		$image->delete();

		return  Redirect::route('imageupload',$album->id)->with('message','Image Deleted');
	}


}
