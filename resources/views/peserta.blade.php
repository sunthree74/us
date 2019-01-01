@extends('layouts.master')

@section('content')
<div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-dark">
                                            <i class="icon-settings font-dark"></i>
                                            <span class="caption-subject bold uppercase">Data Peserta</span>
                                        </div>
                                        <div class="actions"> 
                                          <a class="btn btn-success btn-sm tombol-kanan" href="#" onclick="return m_peserta_e(0);"><i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Tambah</a>        
                                          <a class="btn btn-warning btn-sm tombol-kanan" href="upload/format_import_siswa.xlsx" ><i class="glyphicon glyphicon-download"></i> &nbsp;&nbsp;Download Format Import</a>
                                          <a class="btn btn-info btn-sm tombol-kanan" href="adm/m_siswa/import" ><i class="glyphicon glyphicon-upload"></i> &nbsp;&nbsp;Import</a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <a href="#" onclick="return aktifkan_semua_siswa();" class="btn btn-info" style="margin-bottom: 10px"><i class="fa fa-users"></i> Aktifkan semua peserta</a>
                                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%"  id="datatabel">
                                            <thead>
                                                <tr>
                                                  <th width="5%">No</th>
                                                  <th width="25%">Nama</th>
                                                  <th width="15%">NIP</th>
                                                  <th width="35%">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                    
<div class="modal fade" id="m_peserta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="myModalLabel">Data Peserta</h4>
      </div>
      <div class="modal-body">
          <form name="f_siswa" id="f_siswa" onsubmit="return m_siswa_s();">
            <input type="hidden" name="id" id="id" value="0">
              <table class="table table-form">
                <tr><td style="width: 25%">Nama</td><td style="width: 75%"><input type="text" class="form-control" name="nama" id="nama" required></td></tr>
                <tr><td style="width: 25%">NIP</td><td style="width: 75%"><input type="text" class="form-control" name="nim" id="nim" required></td></tr>
              </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="fa fa-minus-circle"></i> Tutup</button>
      </div>
        </form>
    </div>
  </div>
</div>
<script>
jQuery(document).ready( function() {
        $('#datatable').DataTable({
            "language": {
            "url": "{{ asset('___/plugin/datatables/Indonesian.json')}}"
            },
            "ordering": false,
            "columnDefs": config,
            "bProcessing": true,
            "serverSide": true,
            "bDestroy" : true,
            "ajax":{
                url : {{url('/peserta-list')}}, // json datasource
                type: "post",  // type of method  , by default would be get
                error: function(){  // error handling code
                    $("#"+indentifier).css("display","none");
                }
            }
        });
    });
</script>
@endsection