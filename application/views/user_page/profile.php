        <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Profile</h1>
                            <p>Account Settings > Profile</p>
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
                        <table>
                            <tr>
                                <td>No KTP</td>
                                <td>:</td>
                                <td><?= $result[0]->no_ktp?></td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td><?= $result[0]->nama_lengkap?></td>
                            </tr>
                            <tr>
                                <td>Umur</td>
                                <td>:</td>
                                <td><?= $result[0]->umur?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><?= $result[0]->gender?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?= $result[0]->alamat?></td>
                            </tr>
                            <tr>
                                <td>No Telepon Kantor</td>
                                <td>:</td>
                                <td><?= $result[0]->notelpk?></td>
                            </tr>
                            <tr>
                                <td>Nama Instansi</td>
                                <td>:</td>
                                <td><?= $result[0]->instansi?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?= $result[0]->email?></td>
                            </tr>
                            <tr>
                                <td>Link Instansi</td>
                                <td>:</td>
                                <td><?= $result[0]->link_perusahaan?></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td><?= $result[0]->username?></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td><?= $result[0]->password?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="row">
                        <p><a href="">Deactive Account</a></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="sidebar portfolio-sidebar">
                        <div class="sidebar-item categories">
                            <h3></h3>
                            <ul class="nav navbar-stacked">
                                <li class="active"><a href="#">Account<span class="pull-right"></span></a></li>
                                <li><a href="<?php echo site_url('user/user_lomba')?>">My Competition<span class="pull-right"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>