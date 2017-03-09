        <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">My Competition</h1>
                            <p>Account Setting > My Competition</p>
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
                <div class="col-md-7 col-sm-6">
                    <div class="row">
                        <table class="table">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="glyphicon glyphicon-plus"></span></button>

                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
                              <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                <form action="<?php echo site_url("user/do_tambah")?>" method="post">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span>&times;</button>
                                    <h4 class="modal-title">Add Competition</h4>
                                  </div>
                                  <div class="modal-body">
                                    
                                      <div class="form-group">
                                        <label>Holder</label>
                                         <?php 
                                           $holder = array();
                                          foreach ($dataHolder as $value) {
                                              $holder[$value->id_holder] = $value->nama_lengkap;
                                          }
                                           echo form_dropdown('id_holder', $holder, @$result->id_holder, 'class="form-control"');
                                         ?>
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="nama_lomba" placeholder="Competition">
                                      </div>
                                      <div class="form-group">
                                        <div class="form-inline">
                                          <label>Major</label>
                                            <?php 
                                              $kategori = array();
                                              foreach ($dataKategori as $value) {
                                                  $kategori[$value->id_kategori] = $value->kategori;
                                              }
                                               echo form_dropdown('id_kategori', $kategori, @$result->id_kategori, 'class="form-control"');
                                             ?> 
                                        </div>
                                      </div>    
                                      <div class="form-group">
                                        <textarea class="form-control" name="deskripsi" placeholder="Description"></textarea>
                                      </div>
                                      <div class="form-group">
                                        <div class="form-inline">
                                          <div class="form-group">
                                            <label>Registration Date</label>    
                                            <input type="date" class="form-control" name="tgl_pendaftaran" placeholder="Tempat Lahir">
                                          </div>
                                          <div class="form-group">
                                            <label>Competation Date</label>    
                                            <input type="date" class="form-control" name="tgl_pengumpulan" placeholder="Tanggal Lahir">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="link" placeholder="Link">
                                      </div>
                                      <div class="form-group">
                                        <label>Upload Poster</label>
                                        <input type="file" id="exampleInputFile" name="poster">
                                      </div>

                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                                  </form>
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Competition</th>
                                    <th>Major</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button class="btn">Edit</button>
                                        <button class="btn">Delete</button>
                                        <button class="btn">Detail</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-md-offset-2">
                    <div class="sidebar portfolio-sidebar">
                        <div class="sidebar-item categories">
                            <h3></h3>
                            <ul class="nav navbar-stacked">
                                <li><a href="<?php echo site_url('user/profile')?>">Account<span class="pull-right"></span></a></li>
                                <li class="active"><a href="<?php echo site_url('user/list_lomba')?>">My Competition<span class="pull-right"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>