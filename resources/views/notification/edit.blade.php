@extends('notification.layout')

@section('content')
<br/><br/><br/>
<div class="row">

  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h2> Edit Notification</h2>
      </div>

  </div>
</div>

<form action="{{  url('update/notification/'.$notification->id)  }}" method="POST" enctype="multipart/form-data">
  @csrf

  <div id="wholeBox">
    <div id="titleBox">Update Notification</div>
      <div id="notificationTypeBox">
        <label style="margin-left: 20px;">Selected Type</label>
            @if($notification->notification_type===('Informational'))
              <input style="margin-left: 20px;" type="checkbox" id="Informational" name="old_type" value="" checked > {{ $notification->notification_type }} </>
              <input style="margin-left: 20px;" type="checkbox" id="Critical" name="Critical" value="Critical" >
              <label for="Critical">Critical</label><br>
            @elseif($notification->notification_type===('Critical'))
              <input style="margin-left: 20px;" type="checkbox" id="Critical" name="old_type" value="" checked> {{ $notification->notification_type }} </>
              <input style="margin-left: 20px;" type="checkbox" id="Informational" name="Informational" value="Informational"></>
              <label for="Informational">Informational</label>
            @else
              <label for="Informational">Ekamen BOOM</label>
            @endif
             <!-- <label style="margin-left: 20px;">Change Type</label> -->



      </div>
      <div id="msgBox">
        <table style="margin-left: 20px;">
          <tr>
            <th style="display:block;"><label>Notification</label></th>
            <th><textarea name="notification_msg" style="margin-left: 20px;" rows="10" cols="30">{{ $notification->notification_msg }}</textarea></th>
          </tr>
          <tr>
            <th style="display:block;"><label>Notifier's Name</label></th>
            <th><input type="text" name="notifiers_name" style="margin-left: 20px; width: 265px;" value="{{ $notification->notifiers_name }}"></th>
          </tr>
        </table>
      </div>
      <div id="datesBox">
        <table style="margin-left: 20px;">
          <tr>
            <th style="display:block;"><label>Start Date</label></th>
            <th><input type="date" name="start_date" style="margin-left: 20px;" name="birthday" value="{{ $notification->start_date }}"></th>
          </tr>
          <tr>
            <th style="display:block;"><label>End Date</label></th>
            <th><input type="date" name="end_date" style="margin-left: 20px;" name="birthday" value="{{ $notification->end_date }}"></th>
          </tr>
        </table>
      </div>

      <br/>
      <button type="submit" class="btn btn-primary pull-right" style="width:150px">Update</button>
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
