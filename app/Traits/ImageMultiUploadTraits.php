<?php
namespace App\Traits;

trait ImageMultiUploadTraits {

	public function imgMultiUpload($req, $file)
    {
        $part = public_path('assets/img/uploads/'.$file.'/');
       
        if(!file_exists($part)){
                mkdir($part, 0777, true);
            }
        //$input = $req->img;
        $images = array();
        $img=$req->file('img');

        if($req->hasFile('img')){
          
          foreach($img as $m){

            $extension=$m->getClientOriginalExtension();
            $typt=$m->getMimeType();
            $oriname=$m->getClientOriginalName();
            $newName=time().$oriname; 
            //dd($m);

            /*  
            if($size > 10240)
            {
                return 'big size';
            }
            */

            if($typt == "image/jpeg" ||  $typt == "image/png" ||  $typt == "image/jpg")
            {
                // proceed with the request
            }
            else{
                
                return redirect()->back()->with('warning', 'Invalid Image type. Image Must be png,jpeg,jpg');
            } 


            $images[] = $newName;
            //dd($image);
            $m->move($part, $newName); 
          } 
        }

      return $images;
        
    }
}