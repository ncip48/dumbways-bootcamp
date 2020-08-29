$(document).on("click", ".classEditCategory", function () {
    var id = $(this).data('idcat');
    var nama = $(this).data('namacat')
    $(".modal-body #catId").val( id );
    $(".modal-body #catNama").val( nama );
    $("#jenengKategori").html( nama );
    // As pointed out in comments, 
    // it is unnecessary to have to manually call the modal.
    // $('#addBookDialog').modal('show');
});

$(document).on("click", ".classEditVideo", function () {
    var id = $(this).data('idvideo');
    var title = $(this).data('titelvideo')
    var kategori = $(this).data('kategorivideo')
    $(".modal-body #vidId").val( id );
    $(".modal-body #vidTitle").val( title );
    $(".modal-body #vidCat").val( kategori );
    $("#jenengKategoriVideo").html( title );
    // As pointed out in comments, 
    // it is unnecessary to have to manually call the modal.
    // $('#addBookDialog').modal('show');
});