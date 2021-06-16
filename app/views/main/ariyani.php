<div class="modal fade lug" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Change</h4>
               </div>
               <div class="modal-body">
               </div>
            </div>
         </div>
      </div>
      <div id="sidebar" class="top-nav">
      </div>
      <div class="terms-conditions product-page">
         <div class="terms-title">
      </div>
      <div class="product-page-main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="prod-page-title">
                     <!-- <h2>Cahya Nur Ariyani</h2> -->
                     <h2> <?= $data['ariyani']['nama'] ?> </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-7 col-sm-8">
                  <div class="md-prod-page">
                     <div class="md-prod-page-in">
                        <div class="page-preview">
                           <div class="preview">
                              <div class="preview-pic tab-content">
                                 <div class="tab-pane active" id="pic-1"><img src="<?=$data['ariyani']['img']?>" alt="#" /></div>
                              </div>
                           </div>
                        </div>
                        <div class="btn-dit-list clearfix">
                        </div>
                     </div>
                     <div class="description-box">
                        <div class="dex-a">
                           <h4>Sekilas Tentang Ariyani : </h4>
                           <p><?= $data['ariyani']['story'] ?></p>
                           <br>
                        </div>
                        <div class="spe-a">
                           <h4>Data Diri Pasien</h4>
                           <ul>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Nama Lengkap</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p><?= $data['ariyani']['nama'] ?></p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Tempat Tanggal Lahir</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p><?= $data['ariyani']['ttl'] ?></p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Tinggi & Berat Badan</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>Tinggi : <?= $data['ariyani']['tinggi'] ?> / Berat Badan : <?= $data['ariyani']['berat'] ?> kg</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Golongan Darah</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p><?= $data['ariyani']['goldar'] ?></p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Jumlah Darah yang Dibutuhkan</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p><?= $data['ariyani']['jumlah'] ?></p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Dirawat Sejak</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p><?= $data['ariyani']['hospitalized'] ?></p>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-12">
                  <div class="price-box-right float-end">
                     <h4>Contact Person : </h4>
                     <h3><?= $data['ariyani']['cp'] ?></h3>
                     <h5>Hubungi nomor diatas jika anda berminat untuk mendonorkan darah anda</h5>
                  </div>
               </div>
            </div>
         </div>
      </div>