<?php
$distanceDecimals = $this->stopwatch->howmanydecimals($record['distance']);
?>
<style>
      body
      {
        font-size:13px;
      }
      .text-title1
      {
        font-size: 28px;
        line-height: 34px;
      }
      .time
      {
        line-height:3;
      }
      .inline-stats {
        clear: none;
        white-space: nowrap;
      }
      .inline-stats li
      {
        margin-left:10px;
        margin-right:10px;
        list-style-type: none;
        display: inline-block;
       }
     .metric
      {
        font-size: 28px;
        display: block;
        font-weight: 300;
      }
      .unit
      {
        font-size: 0.65em;
      }
      .metric-label
      {
        font-size:12px;
        color: #99999e;
      }
  </style>
<ul class="inline-stats ps-0">
  <li>
    <div class="metric text-left" style="">
      <?=date("H:i",strtotime($record['start_date_local']))?>
    </div>
    <div class="metric-label text-center">
      time
    </div>
  </li>
  <li>
    <div class="metric text-left" style="">
      <?=$iconInTitle?>
    </div>
    <div class="metric-label text-center">
      activity
    </div>
  </li>
  <li>
    <div class="metric text-left" style="">
      <?=$this->stopwatch->elapsed($record['moving_time'], array('decimals'=>0))?>
    </div>
    <div class="metric-label text-center">
      moving
    </div>
  </li>
  <li class="text-center">
    <div class="metric text-center" style="">
      <?=number_format($record['distance'], $distanceDecimals)?>
    </div>
    <div class="metric-label text-center">
      distance
    </div>
  </li>
  <li>
    <div class="metric text-center" style="">
      <?=($record['activitytype_id'] == CYCLING)  || ($record['activitytype_id'] == SKIING) ? number_format($record['rate'], 2) : $record['rate']?>
    </div>
    <div class="metric-label text-center">
      speed
    </div>
  </li>
  <li>
    <div class="metric text-center" style="margin-bottom:0px">
      <?=is_numeric($record['total_elevation_gain']) ? number_format($record['total_elevation_gain'] ,0) : ''?>
    </div>
    <div class="metric-label text-center">
      ascent
    </div>
  </li>

  <li>
    <div class="metric text-center" style="margin-bottom:0px">
      <?=number_format($record['calories'],0)?>
    </div>
    <div class="metric-label text-center">
      calories
    </div>
  </li>
  <li>
    <div class="metric text-center" style="margin-bottom:0px">
      <?=number_format($record['average_heartrate'],0)?>
    </div>
    <div class="metric-label text-center">
      avg heart
    </div>
  </li>
  <li>
    <div class="metric text-center" style="margin-bottom:0px">
      <?=number_format($record['max_heartrate'],0)?>
    </div>
    <div class="metric-label text-center">
      max heart
    </div>
  </li>
  <li>
    <div class="metric text-center" style="margin-bottom:0px">
      <?=$record['kudos_count']?>
    </div>
    <div class="metric-label text-center">
      kudos
    </div>
  </li>
</ul>
