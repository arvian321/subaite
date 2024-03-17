<!-- SIDEBAR LEFT -->
         <style type="text/css">
           a.item-175.active{
            color: blue;
           }
         </style>
          <div class="t3-sidebar t3-sidebar-left col-xs-12 col-sm-4 col-sm-pull-8 col-md-3 col-md-pull-9 ">
            <div class="t3-module module " id="Mod144">
              <div class="module-inner">
                <h3 class="module-title module-head">Kinerja</h3>
                <div class="module-ct">
                  <ul class="nav nav-pills nav-stacked menu">
                    <li class="item-175 <?= $_SERVER['PHP_SELF']=='/rencana.php'?'current active':'' ?> "><a data-bs-toggle="collapse" data-bs-target="#accordion-list-1" class="collapsed"> Rencana Kerja</a>
                  <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      <ul>
                        <li>
                          <a class="item-175" onclick="getMenu(this,'rencanaTahunan')">Rencana Kerja Tahunan</a>
                        </li>
                        <li>
                          <a class="item-175" onclick="getMenu(this,'rencanaStrategis')">Rencana Strategis</a>
                        </li>
                        <li>
                          <a class="item-175" onclick="getMenu(this,'indikator')">SK Indikator Kerja Utama</a>
                        </li>
                        <li>
                          <a class="item-175" onclick="getMenu(this,'dipa')">DIPA</a>
                        </li>
                        <li>
                          <a class="item-175" onclick="getMenu(this,'perjanjian')">Rencana Aksi dan Perjanjian Kerja</a>
                        </li>
                      </ul>
                    </p>
                  </div></a></li>
                  <li  class="item-175 <?= $_SERVER['PHP_SELF']=='/rencana.php'?'current active':'' ?> "><a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"> Laporan Bulanan / Triwulan</a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      <ul>
                        <li>
                          <a class="item-175" onclick="getMenu(this,'rencana')">Laporan Evaluasi Internal</a>
                        </li>
                        <li>
                          <a class="item-175" onclick="getMenu(this,'capaian')">Laporan Capaian Output</a>
                        </li>
                        <li>
                          <a class="item-175" onclick="getMenu(this,'rencanaStrategis')">Laporan Evaluasi Kinerja Interim Deputi III</a>
                        </li>                        
                      </ul>
                    </p>
                  </div></a></li>
                  <li  class="item-175 <?= $_SERVER['PHP_SELF']=='/rencana.php'?'current active':'' ?> "><a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"> Laporan Tahunan</a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      <ul>
                        <li>
                          <a class="item-175" onclick="getMenu(this,'tahunanSpo')">Laporan Tahunan Dit. SPO</a>
                        </li>
                        <li>
                          <a class="item-175" onclick="getMenu(this,'evaluasiDeputi')">Laporan Evaluasi Kinerja Deputi III</a>
                        </li>                                               
                      </ul>
                    </p>
                  </div></a></li>
                   <!--  <li onclick="getMenu(this,'kinerja')" class="item-175 <?= $_SERVER['PHP_SELF']=='/kinerja.php'?'current active':'' ?>"><a class="">Indikator Kinerja Utama</a></li>
                    <li onclick="getMenu(this,'laporan')" class="item-175 <?= $_SERVER['PHP_SELF']=='/laporan.php'?'current active':'' ?>"><a  class="">Laporan Kinerja</a></li>  -->                  
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- //SIDEBAR LEFT -->

         