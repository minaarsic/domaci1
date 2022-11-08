<?php
include 'header.php';

?>

<div class='container mt-3'>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Forma proizvod</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form id="proizvodForma">
                        <div class="form-group">
                            <label for="naziv" class="col-form-label">Naziv</label>
                            <input required type="text" class="form-control" id="naziv">
                        </div>
                        <div class="form-group">
                            <label for="sifra" class="col-form-label">Sifra</label>
                            <input required type="text" class="form-control" id="sifra">
                        </div>
                        <div class="form-group">
                            <label for="serijskiBroj" class="col-form-label">Serijski broj</label>
                            <input required type="text" class="form-control" id="serijskiBroj">
                        </div>
                        <div class="form-group">
                            <label for="prodajnaCena" class="col-form-label">Prodajna cena</label>
                            <input required type="number" class="form-control" id="prodajnaCena">
                        </div>
                        <div class="form-group">
                            <label for="kupovnaCena" class="col-form-label">Kupovna cena</label>
                            <input required type="number" class="form-control" id="kupovnaCena">
                        </div>
                        <div class="form-group">
                            <label for="stanje" class="col-form-label">Stanje</label>
                            <input required type="number" class="form-control" id="stanje">
                        </div>
                        <div class="form-group">
                            <label for="vrsta" class="col-form-label">Vrsta</label>
                            <select required class="form-control" id="vrsta"></select>
                        </div>
                        <div class="form-group">
                            <label for="opis" class="col-form-label">Opis</label>
                            <textarea required type="number" class="form-control" id="opis"></textarea>
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
            <h1 class="text-center">Proizvodi</h1>
        </div>
        <div class="col-1">
            <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary width-100">Kreiraj</button>
        </div>
    </div>

    <table class="table table-light">
        <thead>
            <th>ID</th>
            <th>Naziv</th>
            <th>Sifra</th>
            <th>Serijski broj</th>
            <th>Prodajna cena</th>
            <th>Kupovna cena</th>
            <th>Stanje</th>
            <th>Vrsta</th>
            <th>Izmeni</th>
            <th>Obrisi</th>
        </thead>
        <tbody id='proizvodi'>

        </tbody>
    </table>
</div>

<?php
include 'footer.php';

?>