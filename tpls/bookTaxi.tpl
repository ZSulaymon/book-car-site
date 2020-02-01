<div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5"  data-aos="fade">

            <?if($name!=""){ ?>

            <form action="" class="p-5 bg-white" action="" method="post">
             

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Имя</label>
                  <input type="text" id="fname" class="form-control" name="name">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Фамилия</label>
                  <input type="text" id="lname" class="form-control" name="surname">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="tel">Телефон</label> 
                  <input type="tel" id="tel" class="form-control" name="tel">
                </div>
              </div>
			 <div class="row form-group">                
                <div class="col-md-12">
                  <label class="text-black" for="adres">Адрес</label> 
                  <input type="text" id="adres" class="form-control" name="adres" placeholder="Район / Улица / Дом №">
                </div>
              </div>
              <div class="row form-group">                                
                <div class="col-md-6">
                    <label class="text-black" for="fromtime">Время: </label> 
                     <input type="time" class="form-control" id="fromtime" name="fromtime">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Сообщений</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Сообщений"></textarea>
                </div>
              </div>
				<input type="hidden" name="place" value="<?=$taxi[0]['place'];?>"/>
				<input type="hidden" name="freeplace" value="<?=$taxi[0][0];?>"/>
				<input type="hidden" name="idTaxi" value="<?=$taxi[0]['id'];?>"/>
				
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Заказать" class="btn btn-primary btn-md text-white" name="<?=$name;?>">
                </div>
              </div>

  
            </form>
             <? } ?>
          </div>
          <div class="col-md-5"  data-aos="fade" data-aos-delay="100">
            
            <div class="p-4 mb-3 bg-white">
	            <div class="row">
	            <div class="col-md-5">
	               <img src="data:image/jpeg;base64,<?=base64_encode($taxi[0]['image'])?>" style="width: 100%;"> 
	            </div>
	            <div class="col-md-7">
	               Номер такси: <b><?=$taxi[0]['tel'];?></b><br>
	               Тел: <b>953 25 25 32</b><br>
	               Водитель: <b><?=($taxi[0]['dr_name'].' '.$taxi[0]['dr_surname']);?></b>
	            </div>
	            <div class="col-md-12">
	            Направлений: <?=$taxi[0]['direction'];?><br>
	                 Место: <?=$taxi[0]['place'];?> <br>
                                				                    
                    Свободно: <?=$taxi[0][0];?>   
	              <hr>
	              <?=$taxi[0]['info'];?>
							              
	            </div>
				</div>
            </div>
            
            

          </div>
        </div>
      </div>
    </div>