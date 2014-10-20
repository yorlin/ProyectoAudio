<div class="container">
  <h1>Music Box</h1>

  {{ Form::open(array('url' => 'partir','enctype'=>'multipart/form-data','id'=>'upload')) }}
 

  <div class="form-group">
    <label for="InputFile">Seleccione un archivo:</label>
    <input type="file" name="cancion" id="InputFile">
  </div>
  <div class="checkbox">
    <label>Eliga como quiere Dividir su archivo: </label><br>
    <input id="partes" type="radio" name="tiempoPartes" value="1"> Partes<br>
    <input id="tiempo" type="radio" name="tiempoPartes" value="0"> Tiempo<br>
    <input type=hidden id="cant" name="cantidad" value="1">
    <div  id="selector" class="row">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Dividir</button>
  {{Form::close()}}
  <div id='msg'></div>

</div>



