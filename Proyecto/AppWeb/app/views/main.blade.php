<div class="container">
  <h1>Music Box</h1>

  {{ Form::open(array('url' => '/postUpload','enctype'=>'multipart/form-data','id'=>'upload')) }}
  {{HTML::script('js/jquery.js');}}

  <div class="form-group">
    <label for="InputFile">Seleccione un archivo:</label>
    <input type="file" name="file" id="InputFile">
  </div>
  <div class="checkbox">
    <label>Eliga como quiere Dividir su archivo: </label><br>
    <input type="radio" name="format" value="partes"> Partes<br>
    <div class="row">
      <div class="col-xs-3 col-xs-offset-3">
        <div class="input-group number-spinner">
          <span class="input-group-btn">
            <label class="btn cantidad btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></label>
          </span>
          <input type="text" class="form-control text-center" value="1">
          <span class="input-group-btn">
            <label class="btn cantidad btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></label>
          </span>
        </div>
      </div>
    </div>
    <input type="radio" name="format" value="tiempo"> Tiempo<br>
  </div>
  <button type="submit" class="btn btn-primary">Dividir</button>
  {{Form::close()}}
  <div id='msg'></div>

</div>



