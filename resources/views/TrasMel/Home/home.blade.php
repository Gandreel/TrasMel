@extends('Template.layoutTrasMel')
@section('title', 'TrasMel')
@section('contenido')
<script>
 /*$(document).ready(function(){
   $(".button-collapse").sideNav();
   $('.slider').slider({full_width: true});
 }
 );*/

 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, options);
    var instance = M.Slider.getInstance(elem);
  });
</script>
<div class="container">
        <div class="slider">
                <ul class="slides">

                  <li >
                    <img  src="https://lorempixel.com/580/250/nature/1"> <!-- random image -->
                    <div class="caption center-align">
                      <h3>This is our big Tagline!</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                  </li>
                  <li>
                    <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
                    <div class="caption left-align">
                      <h3>Left Aligned Caption</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                  </li>
                  <li>
                    <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
                    <div class="caption right-align">
                      <h3>Right Aligned Caption</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                  </li>
                  <li>
                    <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
                    <div class="caption center-align">
                      <h3>This is our big Tagline!</h3>
                      <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                  </li>
                </ul>
              </div>

</div>



@endsection