<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Competition</h1>
                            <p>See the detail of the competition</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="portfolio-information" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="<?php echo base_url("gambar/") . $result[0]->poster?>" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="project-name overflow">
                        <h2 class="bold"><?= $result[0]->nama_lomba?> </h2>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="#"><i class="fa fa-clock-o"></i><?= $result[0]->tgl_pengumpulan?></a></li>
                            <li><a href="#"><i class="fa fa-tag"></i><?= $result[0]->kategori?></a></li>
                        </ul>
                    </div>
                    <div class="project-info overflow">
                        <h3>Competition Info</h3>
                        <p><?= $result[0]->deskripsi?></p>
						<!---
                        <ul class="elements">
                            <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li><i class="fa fa-angle-right"></i> Donec tincidunt felis quis ipsum porttitor, non rutrum lorem rhoncus.</li>
                            <li><i class="fa fa-angle-right"></i> Nam in quam consectetur nulla placerat dapibus ut ut nunc.</li>
                        </ul> --->
                    </div>
                    <div class="skills overflow">
                        <h3>Tags</h3>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="#"><i class="fa fa-check-square"></i><?= $result[0]->nama_lomba?></a></li>
                        </ul>
                    </div>
                    <div class="client overflow">
                        <h3>Holder</h3>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="#"><i class="fa fa-bolt"></i><?= $result[0]->instansi?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>