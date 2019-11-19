<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="./js/scriptt.js"></script>
<style>
  body{
    background-color:#333333; 
  }
.preloader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #F44336;
  border-bottom: 16px solid #0B9444;
  width: 80px;
  height: 80px;
  animation: spin 2s linear infinite;
  margin: auto;
  margin-top:280px;
}
@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
@keyframes fadeout {
  from {opacity: 1;}
  to {opacity: 0;}
}
</style>
</head>
<body>
<div class="preloader" id="preload">
</div>

</body>
</html>
