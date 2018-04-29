<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.1.5/js/ripples.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.1.5/js/material.min.js"></script>

 <style media="screen">
 body{
 width: 100%;
 height: 100%;
 }
 .btn-group-sm .btn-fab{
 position: fixed !important;
 left: 29px;
 }
 .btn-group .btn-fab{
 position: fixed !important;
left: 29px;

 }
 #main{
 bottom: 20px;
 }
 #mail{
 bottom: 80px
 }
 #sms{
 bottom: 125px
 }
 #autre{
 bottom: 170px
 }
 </style>

<script type="text/javascript">
$("#main").click(function() {
$("#mini-fab").toggleClass('hidden');
});

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
$.material.init();
</script>
