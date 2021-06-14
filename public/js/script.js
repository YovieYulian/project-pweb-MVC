$(function() {

    $('.tambahData').on('click',function () {
       
        $('#judulModal').html('Tambah Data');
        $('.modal-footer button[type=submit]').html('Tambah')


    });

   
    $('.tampilModalUbah').on('click',function () {
       
        $('#judulModal').html('Ubah Data');
        $('.modal-footer button[type=submit]').html('ubah');
        $('.modal-body form ').attr('action', 'http://localhost/project/public/mahasiswa/ubah')
        const id = $(this).data('id');
        
        $.ajax({

            url: 'http://localhost/project/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType : 'json',
            success : function (data) {
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);

            }
        })
    });

   

});