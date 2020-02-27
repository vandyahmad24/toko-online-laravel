 	 $(document).ready(function()
              {
                    $("#button").click(function()
                    {        
                       $.post( "{{url('/tambah_user/tambah/')}}", function( data )
                       { 
                       		alert('cek');
                          $( "#masuk" ).html( data );
                       });
                    });
              });