@extends('notification.layout')

@section('content')
<br/><br/><br/>
  <div class="row">

    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2> Notifications List</h2>
        </div>

        <div class="pull-right">
          <a class="btn btn-success" href="{{ route('create.notification') }}">Create Notification</a>
        </div>
    </div>

    @if($message = Session::get('success'))
    <br/><br/><br/><br/>
    <div class="alert alert-success">
      <p> {{  $message  }} </p>
    </div>


    @endif

    <table class="table table-bordered">
        <tr>
          <th width="150px">Notification Type</th>
          <th>Notification Msg</th>
          <th width="150px">Notifier's Name</th>
          <th width="100px">Start Date</th>
          <th width="100px">End Date</th>
          <th width="250px">Action</th>
        </tr>

        @foreach($notification as $noti)

        <tr>
          <td>{{ $noti-> notification_type }}</td>
          <td>{{ $noti-> notification_msg }}</td>
          <td>{{ $noti-> notifiers_name }}</td>
          <td>{{ $noti-> start_date }}</td>
          <td>{{ $noti-> end_date }}</td>
          <td>
              <a class="btn btn-primary" href="{{ URL::to('edit/notification/'.$noti->id) }}">Edit</a>
              <a class="btn btn-danger" href="{{ URL::to('delete/notification/'.$noti->id) }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
          </td>
        </tr>
        @endforeach
    </table>

  </div>


@endsection
