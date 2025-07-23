@extends('heritad')
@section('content')



<br><br>
<section class="section-sm" id='tt'>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto" id='ttt'>

                <div class="content mb-5">

                    <!-- <p id="t">Resrver vite vos logements , appartements, chambres a coucher,tables a manger,salles de conferances...</p> -->
                </div>

                <form id="" method="POST" action="{{route('storechambre.chambre') }}" enctype="multipart/form-data">
                    <h2 align='center'> <img class="img-fluid" width="100px" src="images/im.jpg"
                            alt="Reader | Hugo Personal Blog Template"></h2>

                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif

                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif


                    @csrf
                    <div class="form-group">
                        <label for="name">type</label>
                        <input type="text" name="type" id="name" class="form-control" placeholder="type de chambre?"
                            required>
                    </div>

                    <div class="form-group" align=''>

                        <input type="checkbox" name="netoyer" id="">
                        <label for="name">Chambre netoyer</label>
                    </div>

                    <div class="form-group" align='center'>
                        <label for="name">Douche privé</label>
                        <input type="checkbox" name="douche" id="">

                    </div>

                    <div class="form-group" align='right'>

                        <input type="radio" name="toilette" id="">
                        <label for="name">toilette</label>
                    </div>

                    <div class="form-group">
                        <label for="name">numero </label>
                        <input type="number" name="numero" id="name" class="form-control"
                            placeholder="numero de chambre?" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Etage </label>
                        <input type="number" name="etage" id="name" class="form-control" placeholder="rang de l'etage?"
                            required>
                    </div>



                    <div class="form-group">
                        <fieldset>
                            <label for="name">statut</label>
                            <select name="statut" id="time" id="name" class="form-control">
                                <option name="Lunch" id="Lunch">disponible</option>
                                <option name="Lunch" id="Lunch">occupe</option>
                            </select>
                        </fieldset>
                    </div>

                    <div class="form-group">
                        <label for="name">photo</label>
                        <input type="file" name="image" id="name" class="form-control" placeholder="votre photo svp?"
                            required>
                    </div>
                    <div class="form-group">
                        <fieldset>
                            <label for="name">salle de bain</label>
                            <select name="bain" id="time" id="name" class="form-control">
                                <option name="Lunch" id="Lunch">avec sallle de bain</option>
                                <option name="Lunch" id="Lunch">sans salle de bain</option>
                            </select>
                        </fieldset>
                    </div>

                    <div class="form-group">
                        <fieldset>
                            <label for="name">television </label>
                            <select name="tele" id="time" id="name" class="form-control">
                                <option name="Lunch" id="Lunch">avec television</option>
                                <option name="Lunch" id="Lunch">sans television</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="form-group">
                        <label for="name">capacite</label>
                        <input type="number" name="capacite" id="name" class="form-control"
                            placeholder="Nombres de personne svp?" required>
                    </div>

                    <div class="form-group">
                        <label for="name">tarif</label>
                        <input type="number" name="tarif" id="name" class="form-control"
                            placeholder="le prix du chambre svp?" required>
                    </div>


                    <div class="form-group">
                        <fieldset>
                            <label for="name">Climatiseur</label>
                            <select name="clim" id="time" id="name" class="form-control">
                                <option name="Lunch" id="Lunch">climatiser</option>
                                <option name="Lunch" id="Lunch">non climatiser</option>
                            </select>
                        </fieldset>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control"
                            placeholder="votre message svp?"></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</section>



@endsection