  <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5"  data-aos="fade">

            

            <form action="" class="p-5 bg-white" action="" method="post">
             <input type="hidden" name="idCar" value="<?=$car[0]['id'];?>"/>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Имя</label>
                  <input type="text" id="fname" class="form-control" name="name">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Фамилия</label>
                  <input type="text" id="lname" class="form-control"name="surname">
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
                  <input type="text" id="adres" class="form-control" name="adres" placeholder="Район/ Улица/ Дом №">
                </div>
              </div>



              <div class="row form-group">
                
                <div class="col-md-6">
                    <label class="text-black" for="fromdate">От <input type="date" class="form-control" id="fromdate" name="fromdate"> </label> 
                   
                   
                </div>
                <div class="col-md-5">
                    <label class="text-white" for="fromtime">Time<input type="time" class="form-control" id="fromtime" name="fromtime"> </label> 
                     
                </div>
              </div>
					
					<div class="row form-group">
                
                <div class="col-md-4">
                    <label class="text-black" for="todate">До  <input type="time" class="form-control" id="totime" name="totime"> </label> 
                     
                </div>
                <div class="col-md-6">
                   
                    
                </div>
              </div>
					
					
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Сообщений</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Сообщений"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Заказать" class="btn btn-primary btn-md text-white"name="send">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5"  data-aos="fade" data-aos-delay="100">
            
            <div class="p-4 mb-3 bg-white">
	            <div class="row">
	            <div class="col-md-5">
	               <img src="data:image/jpeg;base64,<?=base64_encode($car[0]['image'])?>" style="width: 100%;"> 
	            </div>
	            <div class="col-md-7">
	               Номер такси: <b><?=$car[0]['tel'];?></b><br>
	               Тел: <b>953 25 25 32</b><br/>
	               Водитель: <b><?=($car[0]['dr_name'].' '.$car[0]['dr_surname']);?></b>
	            </div>
	            <div class="col-md-12">	              
	              <hr/>
	              <?=$car[0]['info'];?><hr/>
	              <font color="#ff0000">
				 	<?if(count($from) > 0){ ?>
				 	<b><h5>Занято</h5></b>
	                    <? for($i = 0; $i < $t = count($from); $i++){ ?>
	                      <b>от: <?=$from[$i]; ?>  </b><br/>
	                      <b>до: <?=$to[$i] ?> </b><hr/>
	                	<? }  ?>
	                <? }  ?> 
	                	</font>              
	            </div>
				</div>
            </div>
            
            

          </div>
        </div>
      </div>
    </div>