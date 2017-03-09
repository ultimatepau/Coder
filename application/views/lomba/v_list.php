		<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Competition</h1>
                            <p>List of the recent competition</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="projects" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="row">
					<?php foreach ($resultcompetition as $row) { ?>
                        <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded logos">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-single">
                                    <div class="portfolio-thumb">
                                        <img src="<?php echo base_url("/gambar/"). $row->poster?>" class="img-responsive" alt="">
                                    </div>
                                    <div class="portfolio-view">
                                        <ul class="nav nav-pills">
                                            <li><a href="<?php echo site_url('lomba/show/') . $row->kd_lomba ?>"><i class="fa fa-link"></i></a></li>
                                            <li><a href="<?php echo base_url("/gambar/"). $row->poster?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="portfolio-info ">
                                    <h2><?= $row->nama_lomba?></h2>
                                </div>
                            </div>
                        </div>
					<?php } ?>
                        <!--- tutup dulu
                        <div class="portfolio-pagination">
                            <ul class="pagination">
                              <li><a href="#">left</a></li>
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li><a href="#">6</a></li>
                              <li><a href="#">7</a></li>
                              <li><a href="#">8</a></li>
                              <li><a href="#">9</a></li>
                              <li><a href="#">right</a></li>
                            </ul>
                        </div> --->
                    </div> <!--- end row --->
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="sidebar portfolio-sidebar">
                        <div class="sidebar-item categories">
                            <h3>Categories</h3>
                            <ul class="nav navbar-stacked">
							<li><a href="<?=base_url()?>lomba">All Categories<span class="pull-right">(1)</span></a></li>
							<?php foreach ($result as $row) {?>
                                <li><a href="<?=base_url()?>lomba?cat=<?= $row->kategori?>"><?= $row->kategori?><span class="pull-right">(1)</span></a></li>
							<?php } ?>
                            </ul>
                        </div>
                        <div class="sidebar-item tag-cloud">
                            <h3>Tags</h3>
                            <ul class="nav nav-pills">
							<?php foreach ($tags as $row) { ?>
                                <li><a href="#"><?= $row->nama_lomba?></a></li>
							<?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>