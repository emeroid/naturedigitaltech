<?php
namespace App\Traits;

trait ImageUploadTraits {

	public function imgUpload($req, $reqName, $currentImg, $file)
    {
        $part = public_path('assets/img/uploads/'.$file.'/');

        if(!file_exists($part)){
                mkdir($part, 0777, true);
            }

            //dd($reqName);
        if($req->hasFile($reqName)){

            $img=$req->file($reqName);
            $extension=$img->getClientOriginalExtension();
            $typt=$img->getMimeType();
            $oriname=$img->getClientOriginalName();
            $newName=time().$oriname; 


            if($typt == "image/jpeg" ||  $typt == "image/png" ||  $typt == "image/jpg")
            {
                // proceed with the request
            }
            else{
                
                return redirect()->back()->with('warning','The required image types are: png, jpeg and jpg');
            }
 
            //Delete old image
            $oldImage = $part.$currentImg;
        
            if(file_exists($oldImage) ){
                
                unlink($oldImage);

            }else{

            }

            $currentImg = $newName; 
            $img->move($part, $currentImg);
        

        }

      return $currentImg;
        
    }
}