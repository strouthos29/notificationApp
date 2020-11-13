<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

        <!-- Styles -->
        <style>

          #titleBox{
            background-color: #f5f5f5;
            border-bottom: solid;
            border-color: #e8e8e8;
            padding:10px;
          }
          #notificationTypeBox{
            border-bottom: solid;
            border-color: #e8e8e8;
            padding:20px;
          }
          #msgBox{
            padding:20px;
            border-bottom: solid;
            border-color: #e8e8e8;
          }
          #notifierName{
            width: 225px;
          }
          #datesBox{
            padding:20px;

          }
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
      <div id="wholeBox">
        <div id="titleBox">Create Notifications</div>
          <div id="notificationTypeBox">
            <label style="margin-left: 20px;">Notification Type</label>
            <input type="button" id="informationalBtn" style="margin-left: 20px; width:150px; height:40px; font-size:18px;" value="Informational">
            <input type="button" id="criticalBtn" style="margin-left: 20px; width:150px; height:40px; font-size:18px;" value="Critical">
          </div>
          <div id="msgBox">
            <table style="margin-left: 20px;">
              <tr>
                <th style="display:block;"><label>Notification</label></th>
                <th><textarea id="notificationNote" style="margin-left: 20px;" rows="10" cols="30"></textarea></th>
              </tr>
              <tr>
                <th style="display:block;"><label>Notifier's Name</label></th>
                <th><input type="text" id="notifierName" style="margin-left: 20px;" value=""></th>
              </tr>
            </table>
          </div>
          <div id="datesBox">
            <table style="margin-left: 20px;">
              <tr>
                <th style="display:block;"><label>Start Date</label></th>
                <th><input type="date" id="birthday" style="margin-left: 20px;" name="birthday"></th>
              </tr>
              <tr>
                <th style="display:block;"><label>End Date</label></th>
                <th><input type="date" id="birthday" style="margin-left: 20px;" name="birthday"></th>
              </tr>
            </table>
          </div>
      </div>
    </body>
</html>
