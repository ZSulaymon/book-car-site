<div class="site-section">
      <div class="container">
        <div class="row">

          <div class="col-md-10">

            <div class="row mb-3 align-items-stretch">                        
            <? for($i = 0; $i < count($client); $i++) { ?>
              <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                <div class="h-entry">                  
                  <div class="h-entry-inner">                    
                        Клиент: <b><?=($client[$i]['name'].' '.$client[$i]['surname']); ?></b><br/>
                        Адрес: <b><?=$client[$i]['adres']; ?></b><br/>
                    <p>  Номер телефон: <b><?=$client[$i]['tel']; ?>  </b><br/>  
                   	    Дата:<b> <?=$client[$i]['fromdate']; ?> / время: <?=$client[$i]['fromtime']; ?> </b> <br/>                       
                        Сообщений: <b> <?=$client[$i]['info']; ?> </b> <br/>                    
                    </p>
                  </div>
                </div> 
              </div>
              
              
              <? } ?>
            </div>
             
          </div>

        </div>
        
        
        <a href="?option=dt&titlepage=Мой кабинет&change=change">Изменить</a>
         <? if($_GET['change']=='change'){ ?>
         <div class="row">
          <div class="col-md-6 mb-5">
             
            <form action="" class="p-5 bg-white" method="post" enctype="multipart/form-data" style="border-style: solid; border-color:#dddddd; border-width: 1px; border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;">             
              
              <div class="row form-group">
                
                <div class="col-md-6">
                  <label class="text-black" for="carnumber">Номар машина</label> 
                  <input type="text" id="carnumber" class="form-control" name="carnumber">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="tel">Телефон</label> 
                  <input type="text" id="tel" class="form-control" name="tel">
                </div>
              </div>
		<div class="row form-group">
  	      <div class="col-md-12">
                <label class="text-black" for="message">О себе</label> 
                  <textarea class="form-control" id="message" name="info"></textarea>
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="file">Рисунок машина</label> 
                  <input type="file" id="file" class="form-control btn  text-white" name="image" >
                </div>
              </div>
                             
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Изменить" class="btn btn-primary btn-md text-white" name="send">
                </div>
              </div>

  
            </form>
          
          
           
             
           
           </div>
           
          
        </div>
        <? } ?>
        
      </div>
    </div>
