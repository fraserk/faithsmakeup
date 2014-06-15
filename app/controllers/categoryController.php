<?php

class categoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Category::with('portfolio')->orderBy('id','desc')->paginate(16);
		return View::make('categories.index',compact('data'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data = Category::with('portfolio')->paginate(16);
		return View::make('categories.create',compact('data'));

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$input = Input::all();
        $rules = array( 'image'=>'image|mimes:jpg,gif,png,jpeg|max:2000|required','name'=>'required') ;
        $v = Validator::make($input, $rules);

        if ($v->fails())
        {

            return Redirect::route('create.album')->witherrors($v);
        }


        if (Input::hasfile('image'))
        {   
            $imgwidth = getimagesize(Input::file('image'));
            $extension = Input::file('image')->getClientOriginalExtension();
            $filename = Str_random(8) .'.' . $extension;
            $image_path = $filename;
                       
	         
			$category = new Category;
			$category->name = Input::get('name');
			$category->thumbnail = $image_path;
			$category->save();

            $destinationpath = 'uploads/'.$category->id ;
            Input::file('image')->move($destinationpath,$filename);

            //$tags = 'kim';
            //Cloudy::upload($destinationpath .'/' .$filename,$filename,$tags);  //send photo to cloudy
           // File::deletedirectory($destinationpath); // temp folder
            // if($imgwidth[0] > '340') //resize image if its bigger than 350 px
            // // {
            // //     //resize the image
          // Image::make('uploads/'.$category_id .'/'.$portfolio_image->image_path)->resize(678, 350)->save('uploads/'.$category_id .'/' .$portfolio_image->image_path);

           //create the thumbnail as usuall
          Image::make('uploads/'.$category->id .'/'.$image_path)->resize(150,null, function($constraint){
          	 $constraint->aspectRatio();
   			 $constraint->upsize();
          })->save('uploads/'.$category->id .'/' .$image_path);
           return Redirect::route('imageupload',$category->id)->with('message','Album created..');
        }


		//$data = Category::all();

		return Redirect::route('imageupload',$category->id);

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data = Category::with('portfolio')->find($id)->get(); 

		return View::make('categories.show',compact('data'));
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
		//
	}


}
