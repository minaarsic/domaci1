<?php
include 'header.php';

?>

<div class='container mt-3'>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Forma vrsta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form id="vrstaForma">
                        <div class="form-group">
                            <label for="naziv" class="col-form-label">Naziv</label>
                            <input required type="text" class="form-control" id="naziv">
                        </div>
                        <button type="submit" class="btn btn-primary form-control">Sacuvaj</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="row mb-3">
        <div class="col-1">

        </div>
        <div class="col-10">
            <h1 class="text-center">Vrste proizvoda</h1>
        </div>
        <div class="col-1">
            <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary width-100">Kreiraj</button>
        </div>
    </div>
    <table class="table table-light">
        <thead>
            <th>ID</th>
            <th>Naziv</th>
            <th>Izmeni</th>
            <th>Obrisi</th>
        </thead>
        <tbody id='vrste'>

        </tbody>
    </table>
</div>






<?php
include 'footer.php';

?>