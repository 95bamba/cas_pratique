@extends('heritad')
@section('content')


<br><br>

<section class="section-sm" id='tt'>
  <div class="container" >
    <div class="row">
      <div class="col-lg-9 mx-auto" id='ttt'>
        
        <div class="content mb-5" >
          <h2 id="t" align='center'>client</h2>
          <!-- <p id="t">Resrver vite vos logements , appartements, chambres a coucher,tables a manger,salles de conferances...</p> -->
        </div>

        <form  id="" method="POST" action="{{route('storeclient.client') }}" enctype="multipart/form-data" >
        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                         

                        @csrf

          <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" name="nom" id="name" class="form-control" placeholder="votre nom svp?" required>
          </div>
          <div class="form-group">
            <label for="name">Prenom</label>
            <input type="text" name="prenom" id="name" class="form-control" placeholder="votre prenom svp?" required>
          </div>
          
          <div class="form-group">
            <label for="name">photo</label>
            <input type="file" name="photo" id="name" class="form-control" placeholder="votre photo svp?" required>
          </div>
          <div class="form-group">
            <label for="name">civilité</label>
            <input type="text" name="civil" id="name" class="form-control" placeholder="votre civilite svp?" required>
          </div>
          <div class="form-group">
            <label for="name">pays</label>
            <input type="text" name="pays" id="name" class="form-control" placeholder="votre pays svp?" required>
          </div>
         
          <div class="form-group">
          <label for="name">ville</label>
            <input type="text" name="ville" id="name" class="form-control" placeholder="votre ville svp?" required>    
                            </div>


          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="votre email svp?" required>
          </div>
          <div class="form-group">
            <label for="email">Telephone</label>
            <input type="phone" name="phone" id="email" class="form-control" placeholder="votre telephone svp">
          </div>
          <div class="form-group">
            <label for="message">adresse</label>
            <input type="text" name="adress" id="email" class="form-control" placeholder="votre adresse svp">
          </div>
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
      </div>
    </div>
  </div>
</section>



@endsection