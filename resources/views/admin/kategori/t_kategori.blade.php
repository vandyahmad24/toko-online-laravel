<div class="table-responsive">
            @if(Session::has("success"))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
            @if(Session::has("error"))
            <div class="alert alert-danger">
                {{Session::get('error')}}
            </div>
            @endif
        
        <table class="table table-bordered" >
                <thead>
                    <tr>
                        <th>Nomer</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($lihat_data as $l)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <input type="hidden" name="id" value="{{$l->id}}">
                        <td>{{$l->nama_ktg}}</td>
                        <td>
                         <button type="button" class="btn btn-success editkategori" data-toggle="modal" data-target="#targetmodal">Edit Kategori</button>
                         <!-- Modal untuk edit kategori -->
                         <div class="modal fade" id="targetmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel">Edit Kategori</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">          
                                <form action="/dashboard/lihat_kategori/edit/{{$l->id}}" method="post" autocomplete="off">
                                  <div class="form-group" id="ini">
                                      <label class="col-md-2 control-label">Nama Kategori</label>
                                      <div class="col-md-10" id="anak">
                                          <input type="hidden" name="id" id="idktg">
                                          <input type="text" name="nama_ktg" id="editktg" class="form-control">
                                          @error('nama_ktg')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror
                                      </div>
                                  </div>
                                    {{ csrf_field() }}
                                    <button type="button" id="updatekategori" class="btn btn-primary">Edit Kategori</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <a href="/dashboard/hapus/{{$l->id}}" class="btn btn-danger form-danger inline-block hapus"> Hapus</a>
                        </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
            <script type="text/javascript">
              //script untk paginate
                $(document).ready(function() 
                  {
                    $(".page-link").click(function() 
                    {
                      var page = $(this).attr('href');
                      $('#tabelkategori').load(page);
                      return false ; 
                    });                           
                  // scrip untuk edit kategori
                  $('.editkategori').click(function()
                    {
                    var nama_ktg = $(this).parent().prev().text();
                    var id = $(this).parent().prev().prev().val();
                    $('#idktg').val(id);
                    $('#editktg').val(nama_ktg);
                    $('#updatekategori').click(function()
                    {
                      var token = $(this).prev().val();
                      var update = $(this).siblings('#ini').children('#anak').find('#editktg').val();
                      $.post("{{url('/dashboard/lihat_kategori/edit')}}"+"/"+id,{_token:token,nama_ktg:update},function(data) 
                        {
                         var obj = jQuery.parseJSON(JSON.stringify(data));
                         alert(obj.nama+' berhasil di rubah');
                         $(".close").trigger('click');
                         $("#tabelkategori").load("{{url('dashboard/loadkategori')}}"); 
                        });
                      });
                    });
                //script untuk hapus data
                  $(".hapus").click(function(e)    
                    {
                      e.preventDefault();
                      var link = $(this).attr("href");
                      $.get(link,function(data)
                      {
                        var obj = jQuery.parseJSON(JSON.stringify(data));
                        if (obj.status ==1) {
                          alert(obj.nama+ " Berhasil di Hapus");
                        }else{
                          alert("gagal menghapus");
                        }
                        $("#tabelkategori").load("{{url('dashboard/loadkategori')}}");
                      }); 
                    }); 
                });
            </script>
             {{ $lihat_data->links() }}
