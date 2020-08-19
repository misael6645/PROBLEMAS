@extends('layout')
@section('content')

<div class="header bg-indigo "><h2>Parrafos Reordenados</h2></div>
<div class="body">
 <div class="row">
 	<label><font size="4"><strong>Escriba la(s) estrofas :</strong></font></label>
    <div class="form-group">
      <textarea id="textarea" class="form-control2" rows="20" ></textarea>
      <button onclick="hacer_parrafos()"; id="reordenar" type="button" class="btn bg-indigo waves-effect aux" style="margin-top: -35%;">
        <i class="material-icons">autorenew</i>
      </button>
      <textarea id="textareaout" class="form-control3" rows="20" disabled ></textarea>
   </div>
  </div>
</div>

@endsection