<?php

function GetContent($url, $param){
    $data = curl_init();
    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($data, CURLOPT_URL, $url);
    $result = curl_exec($data);
    curl_close($data);

    $ambil = explode($param, $result);

    return $ambil;
}


function GetAdsImage($url){
    $data = curl_init();
    curl_setopt($data, CURLOPT_URL, $url);
    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($data);
    curl_close($data);    

        $dom = new DOMDocument();
        @$dom->loadHTML($result);
        $img = $dom->getElementsByTagName('img');

        $extractedImages = [];
        foreach($img as $imageTag){

            //Get the src attribute of the image.
            $imgSrc = $imageTag->getAttribute('src');

            //Get data img src attribute
            $dataImgSrc = $imageTag->getAttribute('data-img-src');
        
            //Get the alt text of the image.
            $altText = $imageTag->getAttribute('alt');

            // Get id image
            $idImg = $imageTag->getAttribute('id');
        
            //Get the title text of the image, if it exists.
            $titleText = $imageTag->getAttribute('title');
            

            // echo $altText."<br/>";
            // echo $idImg."<br/>";

            //Add the image details to our $extractedImages array.
            $extractedImages[] = array(
                'id' => $idImg,
                'src' => 'https://www.syoobe.co.id'.$imgSrc,
                'data-img-src' => 'https://syoobe.co.id'.$dataImgSrc,
                'alt' => $altText,
                'title' => $titleText
            );
        }

        // echo count($extractedImages);
        // var_dump($extractedImages); die;            
        // $adsImage = array_splice($extractedImages, 16, 18);
        // $adsImage = array_splice($adsImage, 5);
        // $adsImage = array_splice($adsImage, 0);
        
        // var_dump($adsImage); die; 
       

        echo '
        <div class="section display-hidden-onmobile">
            <div class="adds">
        ';

        foreach($extractedImages as $adsImage):
        
            if($adsImage['id'] == 'banner'):
                $banner = $adsImage['alt'];
                $banner = explode(' ', $banner);
                $banner = count($banner);
                // var_dump($banner); 

                $halfCell = ($banner == 1) ? 'half-cell' : '';
                    echo '
                        <div class="'.$halfCell.'">
                            <div class="border-right">
                                <img class="load_later" id="'.$adsImage['id'].'" src="'.$adsImage['data-img-src'].'" data-img-src="'.$adsImage['data-img-src'].'" alt="'.$adsImage['alt'].'"/>
                            </div>
                        </div>
                        ';
            endif;               
        endforeach;


    //     $i = 0;
    //     do{ 
    //         $halfCell = ($i <= 1) ? 'half-cell' : '';
    //         echo '
    //                 <div class="'.$halfCell.'">
    //                 <div class="border-right">
    //                 <img class="load_later" id="'.$extractedImages[$i]['id'].'" src="'.$extractedImages[$i]['data-img-src'].'" data-img-src="'.$extractedImages[$i]['data-img-src'].'" alt="'.$extractedImages[$i]['alt'].'"/>
    //                 </div>
    //                 </div>
    //             ';
    //     $i++;
    //    }while($i<=count($extractedImages)-1);

        echo '
                    </div>
                </div>
            </div>
        ';
}
