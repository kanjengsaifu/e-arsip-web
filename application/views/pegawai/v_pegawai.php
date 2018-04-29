<?php $this->load->view('inc/head'); ?>
<?php $this->load->view('inc/sidebar'); ?>
<?php $this->load->view('inc/navbar'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">mail</i>
                            </div>
                            <h4 class="card-title">Data <?php echo $page_title; ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                                <a title="Tambah Data" href="<?php echo base_url('pegawai/tambah') ?>" class="btn btn-primary btn-round"><i class="material-icons">add</i> Tambah Data</a>
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nip</th>
                                            <th>Jabatan</th>
                                            <th>Bagian</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            
                                            <th>Agama</th>
                                            
                                            <th>Alamat</th>
                                           
                                            <th>Foto</th>
                                            <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=0; foreach ($data_pegawai as $pegawai): ?>
                                        <tr>
                                            <td><?php echo ++$no; ?></td>

                                             <td><?php echo $pegawai->nip ?></td>   
                                            <td><?php echo $pegawai->id_bagian ?></td>
                                            <td><?php echo $pegawai->id_jabatan ?></td>
                                            
                                            <td><?php echo $pegawai->nama ?></td>
                                            <td><?php echo $pegawai->jenis_kelamin ?></td>
                                            
                                            <td><?php echo $pegawai->agama ?></td>
                                            
                                            <td><?php echo $pegawai->alamat ?></td>
                                            
                                            <td><?php echo $pegawai->foto ?></td>
                                            

                                            <td class="text-right td-actions">
                                                <a href="<?php echo base_url('pegawai/edit/'.$pegawai->nip) ?>" title="Edit" class="btn btn-link btn-warning"><i class="material-icons">mode_edit</i></a>
                                                <a href="#" title="Hapus" class="btn btn-link btn-danger"><i class="material-icons">close</i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- end content-->
                    </div><!--  end card  -->
                </div> <!-- end col-md-12 -->
            </div>
        </div>
    </div>
<?php $this->load->view('inc/footer'); ?>      
<?php $this->load->view('inc/js'); ?>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="<?php echo base_url() ?>assets/js/plugins/jquery.datatables.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",
        }

    });


    var table = $('#datatables').DataTable();
        $('.card .material-datatables label').addClass('form-group');
    });

</script>
</html>