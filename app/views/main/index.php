<div class="modal fade lug" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            </div>
         </div>
      </div>
      <div id="sidebar" class="top-nav">
      </div>
      <div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                  <div class="find-box">
                     <h1>Setetes Darah Anda, Sangat Berarti Bagi Mereka..</h1>
                     <h4>Ayo bantu mereka sembuh!</h4>
                  </div>
               </div>
               <div class="row clearfix">
                  <?php foreach ($data['orang'] as $orang) : ?>
                  <div class="col-lg-3 col-sm-6 col-md-3">
                     <a href="<?= $orang['link'] ?>" >
                        <div class="box-img">
                           <h4><?=$orang['shortname'] ?></h4>
                           <img src="<?=$orang['img'] ?>" alt="" />
                        </div>
                     </a>
                  </div>
                  <?php endforeach; ?>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
