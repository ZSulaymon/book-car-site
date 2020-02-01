 <!-- Content  -->
  
  
     <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Новые объявление</h2>
          <!-- <p class="color-black-opacity-5">Здесь указан те шофёры который у них ест много клиентов</p>---> 
          </div>
        </div>

        <div class="row">
        <?if(!empty($threeCars)){ ?>
        <? for($i = 0; $i < 3; $i++){ ?>
          <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
            
            <div class="listing-item">
              <div class="listing-image">
                <img src="data:image/jpeg;base64,<?=base64_encode($threeCars[$i]['image']); ?>"style="height: 350px;" alt="" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <h2 class="mb-1">Тел: <?=$threeCars[$i]['tel'];?></h2>
                <span class="address">Водитель: <?=($threeCars[$i]['dr_name'].' '.$threeCars[$i]['dr_surname']);?> </span>
                <a class="px-3 mb-3 category" href="?option=bookCar&titlepage=Заказ свадебние машина&idCar=<?=$threeCars[$i]['id'];?>">Подробнее</a>
               
              </div>
            </div>

          </div>
          
          <? } } ?>
          
          
            <?if(!empty($threeTaxis)){ ?>
        <? for($j = 0; $j < 3; $j++){ ?>
         
          <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
            
            <div class="listing-item">
              <div class="listing-image">
                <img src="data:image/jpeg;base64,<?=base64_encode($threeTaxis[$j]['image']); ?>"style="height: 350px;" alt="" class="img-fluid">
              </div>
              <div class="listing-item-content">
               <h2 class="mb-1">Тел:<?=$threeTaxis[$j]['tel'];?></h2>
                <span class="address">Водитель: <?=($threeTaxis[$j]['dr_name'].' '.$threeTaxis[$j]['dr_surname']);?> </span>
                <a class="px-3 mb-3 category" href="?option=bookTaxi&titlepage=Заказ такси&idTaxi=<?=$threeTaxis[$j]['id'];?>">Подробнее</a>
                
              </div>
            </div>

          </div>
         
          <? } } ?>
          
      </div>
    </div>
     

    
    
 
       <?   unset($threeCars); unset($threeTaxis);    ?>
	   
 
 
 
 <!--   <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5">
            <div class="listing-item">
              <div class="listing-image">
                <img src="images/main.png"style="height: 350px;" alt="" class="img-fluid">
              </div>              
            </div>
          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="text-primary mb-3">Мы поможем вам...</h2>
            <div class="row mt-4">
              <div class="col-12">
                <div class="border p-3 rounded mb-2">
                  <a data-toggle="collapse" href="#collapse-1" role="button" aria-expanded="false" aria-controls="collapse-1" class="accordion-item h5 d-block mb-0">How to list my item?</a>

                  <div class="collapse" id="collapse-1">
                    <div class="pt-2">
                      <p class="mb-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                  </div>
                </div>

                <div class="border p-3 rounded mb-2">
                  <a data-toggle="collapse" href="#collapse-4" role="button" aria-expanded="false" aria-controls="collapse-4" class="accordion-item h5 d-block mb-0">Is this available in my country?</a>

                  <div class="collapse" id="collapse-4">
                    <div class="pt-2">
                      <p class="mb-0">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                  </div>
                </div>

                <div class="border p-3 rounded mb-2">
                  <a data-toggle="collapse" href="#collapse-2" role="button" aria-expanded="false" aria-controls="collapse-2" class="accordion-item h5 d-block mb-0">Is it free?</a>

                  <div class="collapse" id="collapse-2">
                    <div class="pt-2">
                      <p class="mb-0">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    </div>
                  </div>
                </div>

                <div class="border p-3 rounded mb-2">
                  <a data-toggle="collapse" href="#collapse-3" role="button" aria-expanded="false" aria-controls="collapse-3" class="accordion-item h5 d-block mb-0">How the system works?</a>

                  <div class="collapse" id="collapse-3">
                    <div class="pt-2">
                      <p class="mb-0">The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div> -->
 
    
     
    <div class="site-section bg-light">
      <div class="container">

       
        <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
             <div class="listing-item">
              <div class="listing-image">
                <p align="center">
              <img src="images/taxi3.jpg">
               </p>
              </div>              
            </div>
             
            </div>
          </div>
          
          <div>
            <div class="testimonial">            
           <div class="listing-item">
              <div class="listing-image">
              <img src="images/im3.jpg">
             </div>
          </div>
            </div>
          </div>
          <div>
            <div class="testimonial">
             <div class="listing-item">
              <div class="listing-image">
               <img src="images/im2.jpg">
               </div>
          </div>
            </div>
          </div>
          
           <div>
            <div class="testimonial">
             <div class="listing-item">
              <div class="listing-image">
               <img src="images/taxi2.jpg">
             </div>
            </div>   
            </div>
          </div>
             
          <div>
            <div class="testimonial">
              <div class="listing-item">
	              <div class="listing-image">
	             <img src="images/im1.jpg">
	             </div>
            </div>
            </div>
          </div>

          <div>
            <div class="testimonial">
            
                <div class="listing-item">
	              <div class="listing-image">
	                <img src="images/taxi1.jpg">
	              
	           
	              </div>
          		</div>
            </div>
          </div>

        </div>
      </div>
    </div>

 