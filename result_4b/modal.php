<?php
include_once("utils/db_connection.php");
?>
<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="addCategory" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="add.php" method="post" name="form1">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kategori</label>
                        <input type="text" class="form-control" type="text" name="a" placeholder="Tulis Kategori">
                    </div>
                    <input type="submit" name="submit_category" class="btn btn-warning" value="Add">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addVideo" tabindex="-1" role="dialog" aria-labelledby="addVideo" aria-hidden="true">
    <?php
    $kategori = mysqli_query($conn, "SELECT * FROM category_tb");
    ?>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="add.php" method="post" name="form3" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Judul</label>
                        <input type="text" name="a" class="form-control" placeholder="Masukkan Judul">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Kategori</label>
                        <select class="form-control" type="text" name="b">
                            <?php while ($kat = mysqli_fetch_array($kategori)) { ?>
                                <option value="<?= $kat['id']; ?>"><?= $kat['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Pilih Gambar</label>
                        <input class="form-control-file" type="file" name="c" />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Video</label>
                        <input class="form-control-file" type="file" name="d" />
                    </div>
                    <input type="submit" name="submit_video" class="btn btn-warning" value="Add">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editCategory" tabindex="-1" role="dialog" aria-labelledby="editCategory" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex align-items-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Kategori </h5>
                    <div class="mx-2" id="jenengKategori"></div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="edit.php" method="post" name="form2">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kategori</label>
                        <input type="hidden" name="a" id="catId" value="">
                        <input type="text" class="form-control" type="text" name="b" placeholder="Tulis Kategori" id="catNama" value="">
                    </div>
                    <input type="submit" name="update_category" class="btn btn-warning" value="Ubah">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editVideo" tabindex="-1" role="dialog" aria-labelledby="editVideo" aria-hidden="true">
    <?php
    $kategori = mysqli_query($conn, "SELECT * FROM category_tb");
    ?>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex align-items-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Video </h5>
                    <div class="mx-2" id="jenengKategoriVideo"></div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="edit.php" method="post" name="form3" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="vidId" value="">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Judul</label>
                        <input id="vidTitle" type="text" name="a" class="form-control" placeholder="Masukkan Judul">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Kategori</label>
                        <select class="form-control" type="text" name="b">
                            <?php while ($kat = mysqli_fetch_array($kategori)) { ?>
                                <option value="<?= $kat['id']; ?>"><?= $kat['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Pilih Gambar</label>
                        <input class="form-control-file" type="file" name="c" />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Video</label>
                        <input class="form-control-file" type="file" name="d" />
                    </div>
                    <input type="submit" name="update_video" class="btn btn-warning" value="Ubah">
                </form>
            </div>
        </div>
    </div>
</div>