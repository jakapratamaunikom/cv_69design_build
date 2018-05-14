$(document).ready(function(){
	var mutasiBankTable = $("#mutasiBankTable").DataTable({
        "language" : {
            "lengthMenu": "Tampilkan _MENU_ data/page",
            "zeroRecords": "Data Tidak Ada",
            "info": "Menampilkan _START_ s.d _END_ dari _TOTAL_ data",
            "infoEmpty": "Menampilkan 0 s.d 0 dari 0 data",
            "search": "Pencarian:",
            "loadingRecords": "Loading...",
            "processing": "Processing...",
            "paginate": {
                "first": "Pertama",
                "last": "Terakhir",
                "next": "Selanjutnya",
                "previous": "Sebelumnya"
            }
        },
        "lengthMenu": [ 10, 25, 75, 100 ],
        "pageLength": 10,
        // order: [],
        // processing: true,
        // serverSide: true,
        // ajax: {
        //     url: BASE_URL+"bank/get-list/",
        //     type: 'POST',
        //     data: {
        //         "token_bank_list" : $('#token_bank_list').val().trim(),
        //     }
        // },
        // "columnDefs": [
        //     {
        //         "targets":[0, 4], // disable order di kolom 1 dan 3
        //         "orderable":false,
        //     }
        // ],
        // createdRow: function(row, data, dataIndex){
        // 	for(var i = 0; i < 5; i++){
        // 		if(i != 1 && i != 2) $('td:eq('+i+')', row).addClass('text-center'); 
        //  		if(i == 2) $('td:eq('+i+')', row).addClass('text-right'); // rata kanan untuk data saldo
        // 	}
        // }
    });

});

/**
*
*/
function getDelete(id, token){
    if(token != ""){
        swal({
            title: "Pesan Konfirmasi",
            text: "Apakah Anda Yakin Akan Menghapus Data Ini !!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Batal",
            closeOnConfirm: false,
        }, function(){
            $.ajax({
                url: BASE_URL+'bank/delete/'+id,
                type: 'post',
                dataType: 'json',
                data: {"token_bank_hapus": token},
                beforeSend: function(){

                },
                success: function(output){
                    console.log(output);
                    swal("Pesan Berhasil", "Data Berhasil Dihapus", "success");
                    $("#bankTable").DataTable().ajax.reload();
                },
                error: function (jqXHR, textStatus, errorThrown){ // error handling
                    console.log(jqXHR, textStatus, errorThrown);
                }
            })
        });
    }
}