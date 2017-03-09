        <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">List of Holder</h1>
                            <p>Account Setting > Holder</p>
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
                                    <th>No. Identity</th>
                                    <th>ID Holder</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Company</th>
                                    <th>Link</th>
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
                                    <td><?php echo $row->no_ktp?></td>
                                    <td><?php echo $row->id_holder ?></td>
                                    <td><?php echo $row->nama_lengkap ?></td>
                                    <td><?php echo $row->email ?></td>
                                    <td><?php echo $row->instansi ?></td>
                                    <td><?php echo $row->link_perusahaan ?></td>
                                    <td>
                                        <a href="<?php echo site_url("admin/deleteHd/") . $row->id_holder?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
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
                                <li class="active"><a href="<?php echo site_url('admin/dataHolder')?>">Holder<span class="pull-right"></span></a></li>
                                <li><a href="<?php echo site_url('admin/dataLomba')?>">Competition<span class="pull-right"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>