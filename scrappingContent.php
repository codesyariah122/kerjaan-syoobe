<?php 
class scrappingContent {
	private $url, $param;
	
    public function setContentsHeader($url,$param)
    {
        $this->url = $url;
        $this->param = $param;
        // var_dump($this->param);die;
    }

    public function getContentsHeader($index, $id)
    {
        $data = curl_init();
        curl_setopt($data, CURLOPT_URL, $this->url);
        curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($data);
        curl_close($data);    

        $first_step = explode($this->param[0], $result);        
        $second_step = explode($this->param[1], $first_step[1]);
        // $this->getCookie($this->url);

        // var_dump($second_step); die;
        if($index !== 1){
            $third_step = explode($this->param[2], $second_step[$index]);
            
            if($id == 0){
                $header1 = explode($this->param[2], $third_step[$id]);
                // var_dump($header1); die;
                for($i=0; $i<=count($header1)-1; $i++){
                    echo $header1[$i];
                }

            }elseif($id == 1){
                $header2 = explode($this->param[2], $third_step[$id]);
                // var_dump($header2); die;
                for($i=0; $i<=count($header2)-1; $i++){
                    echo $header2[$i];
                    echo "
                        <script type='text/javascript'>

                        </script>
                    ";
                }
            }
        }else{
            if($id == ''){
                $fourth_step = explode($this->param[3], $second_step[$index]);
                $fourth_step = array_splice($fourth_step, 0, 47);
                // var_dump($fourth_step); die;
                for($i=0; $i<=count($fourth_step)-1; $i++){
                    echo $fourth_step[$i];
                }      
            }elseif($id == 1){
                $fourth_step = explode($this->param[11], $second_step[1]);
                $fourth_step = array_splice($fourth_step, 47, 49);
                $slider = array_splice($fourth_step, 0, 2);
                // var_dump($slider); die;

                for($i=0; $i<=count($slider)-1; $i++){
                    echo $slider[$i];
                    echo '</div>';
                }
				
				// echo '<a href="#" class="callbacks_nav callbacks1_nav prev">Previous</a>
				// 		<a href="#" class="callbacks_nav callbacks1_nav next">Next</a>
				// 		</div>
                // 	';
            }

        }


    }
	
	public function setAdsImage($url)
    {
        $this->url = $url;
    }

    public function getAdsImage()
    {
        $data = curl_init();
        curl_setopt($data, CURLOPT_URL, $this->url);
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
	
	
	public function setContents($url,$param)
    {
        $this->url = $url;
        $this->param = $param;
        // var_dump($this->param);die;
    }
	
    public function getContents()
    {
        $data = curl_init();
        curl_setopt($data, CURLOPT_URL, $this->url);
        curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($data);
        curl_close($data);

        $first_step = explode($this->param[0], $result);
        $second_step = explode($this->param[1], $first_step[1]);
        $exp = explode($this->param[1], $second_step[0]);
        // $exp2 = explode($this->param[3], $exp1[$index1]);
        // var_dump($exp);
        // die;
        echo '<footer class="footer slide clearfix">';
        for($i=0; $i<=count($exp)-1; $i++){
            echo $exp[$i];
        }
        echo '</footer>';
        
    }
	
	
}
