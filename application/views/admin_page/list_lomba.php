        <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">List Of Competitio</h1>
                            <p>Admin Settings > Competition</p>
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
                <div class="col-md-8 col-sm-7">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Holder</th>
                                    <th>Competition</th>
                                    <th>Major</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                  $i = 1;
                                  foreach ($result as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $row->nama_lengkap ?></td>
                                    <td><?php echo $row->nama_lomba ?></td>
                                    <td><?php echo $row->kategori ?></td>
                                    <td>
                                        <a href="<?php echo site_url("admin/deleteLb/") . $row->kd_lomba?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-sm-offset-1">
                    <div class="sidebar portfolio-sidebar">
                        <div class="sidebar-item categories">
                            <h3></h3>
                            <ul class="nav navbar-stacked">
                                <li><a href="<?php echo site_url('admin/dataHolder')?>">Holder<span class="pull-right"></span></a></li>
                                <li class="active"><a href="<?php echo site_url('admin/dataLomba')?>">Competition<span class="pull-right"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>