<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.container {
  display: flex;
  flex-wrap: wrap;
}

.container .image {
  width: 50%;
}

.container img {
  width: calc(100% - (20px * 2));
  margin: 20px;
}
</style>
<body>
<div class="container">
    @php
        $num
    @endphp
    @foreach ($cv as $c)

    <div class="image">
        <!--<a href="{{URL::to('/resume/'.$c->id)}}">-->
        <a href="{{URL::to('/resume/'.$c->id.'/'.$num)}}">
        <img src="{{$c->image}}" width="500" height="600"/>
        </a>
        <h2>Price:{{$c->price}}</h2>
    </div>

    @endforeach
</div>
</body>
</html>
