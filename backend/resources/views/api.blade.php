@extends('layout')

@section('content')
<h1>API情報の表示</h1>

<hr />
  <div class="calender">
    @foreach($results["datelist"] as $key => $data)
      @if (date('d', strtotime($key)) === "01")
      <div class="year">
        <div>{{ date('Y/m', strtotime($key)); }}</div>
      </div>
      <div class="week">
        <div class="weekDay">日</div>
        <div class="weekDay">月</div>
        <div class="weekDay">火</div>
        <div class="weekDay">水</div>
        <div class="weekDay">木</div>
        <div class="weekDay">金</div>
        <div class="weekDay">土</div>
      </div>
      @endif
      @if (date('d', strtotime($key)) === "01") 
          @for ($i = 0; $i < (int)date('w', strtotime($key)); $i++)
          <div class="day"></div>
          @endfor
      @endif
          <div class="day week-{{ date('w', strtotime($key)); }} @if ($data["rokuyou"] === "大安") taian @endif @if ($data["rokuyou"] === "仏滅") butumetu @endif">
            {{ date('d', strtotime($key)); }}<br>
            {{ $data["rokuyou"] }}
          </div>
    @endforeach
  </div>
<style>
  .calender{
    display: flex;
    text-align: center;
    flex-wrap: wrap;
  }
  .year {
    width: 100%;
    margin: 1rem;
    font-size: 150%;
  }
  .week{
    width: 100%;
    display: flex;
  }
  .weekDay{
    width: calc(100%/7);
  }
  .day {
    width: calc(100%/7);
    font-weight: bold;
  }
  .day.taian {
    background-color: antiquewhite;
    color: blue;
  }
  .day.butumetu {
    background-color: aliceblue;
    color: red;
  }
</style>
@endsection