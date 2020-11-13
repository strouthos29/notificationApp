@extends('notification.layout')

@section('content')
<br/><br/><br/>
<div class="row">

  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h2> Add New Notification</h2>
      </div>


  </div>
</div>

<form action="{{ route('notification.store') }}" method="POST" enctype="multipart/form-data">
  @csrf

  <div id="wholeBox">
    <div id="titleBox">Create Notification</div>
      <div id="notificationTypeBox">
        <label style="margin-left: 20px;">Notification Type</label>
          <input style="margin-left: 20px;" type="checkbox" id="Informational" name="Informational" value="Informational">
          <label for="Informational">Informational</label>
          <input style="margin-left: 20px;" type="checkbox" id="Critical" name="Critical" value="Critical">
          <label for="Critical">Critical</label><br>
      </div>
      <div id="msgBox">
        <table style="margin-left: 20px;">
          <tr>
            <th style="display:block;"><label>Notification</label></th>
            <th><textarea name="notification_msg" style="margin-left: 20px;" rows="10" cols="30"></textarea></th>
          </tr>
          <tr>
            <th style="display:block;"><label>Notifier's Name</label></th>
            <th><input type="text" name="notifiers_name" style="margin-left: 20px; width: 265px;" value=""></th>
          </tr>
        </table>
      </div>
      <div id="datesBox">
        <table style="margin-left: 20px;">
          <tr>
            <th style="display:block;"><label>Start Date</label></th>
            <th><input type="date" name="start_date" style="margin-left: 20px;" name="birthday"></th>
          </tr>
          <tr>
            <th style="display:block;"><label>End Date</label></th>
            <th><input type="date" name="end_date" style="margin-left: 20px;" name="birthday"></th>
          </tr>
        </table>
      </div>

      <br/>
      <button type="submit" class="btn btn-primary pull-right" style="width:150px">Create</button>
      <a class="btn btn-danger pull-left" href="{{ route('notification.index') }}" style="width:150px">Cancel</a>


  </div>

</form>
<script>

$('#Informational').click(function(){
    if($(this).is(':checked')){
      document.getElementById("Critical").checked = false;
    } else {
        document.getElementById("Critical").checked = true;
    }
});

$('#Critical').click(function(){
    if($(this).is(':checked')){
        document.getElementById("Informational").checked = false;
    } else {
        document.getElementById("Informational").checked = true;
    }
});
</script>

@endsection
