<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php 
error_reporting(0);
$q = file_get_contents("https://apiv2.bitz.com/Market/tickerall");
$qdata = json_decode($q);
$x = file_get_contents("https://finans.truncgil.com/today.json");
$xdata = json_decode($x);
?>

<div class="container-fluid" >
<div class="row">
    <div class="col-sm">
    <?php echo "BTC USD"."</br>".$qdata->{'data'}->{'btc_usdt'}->{'askPrice'}."</br>". $btc_y=$qdata->{'data'}->{'btc_usdt'}->{'priceChange24h'}; ?>
    <?php if($btc_y<0){echo '<i class="fa fa-arrow-down" style="color:red" aria-hidden="true"></i>';}elseif($btc_y>0){echo '<i class="fas fa-arrow-up" style="color:green"></i>';} ?>
    <?php echo '</br>'.'<i class="fa fa-arrow-down" style="color:red" aria-hidden="true"></i>'.$qdata->{'data'}->{'btc_usdt'}->{'low'}."</br>".$qdata->{'data'}->{'btc_usdt'}->{'high'}.'<i class="fa fa-arrow-up" style="color:green"></i>' ?>
    </div>
    <div class="col-sm">
    <?php echo "ETH USD"."</br>".$qdata->{'data'}->{'eth_usdt'}->{'askPrice'}."</br>". $eth_y=$qdata->{'data'}->{'eth_usdt'}->{'priceChange24h'}; ?>
    <?php if($eth_y<0){echo '<i class="fa fa-arrow-down" style="color:red" aria-hidden="true"></i>';}elseif($eth_y>0){echo '<i class="fa fa-arrow-up" style="color:green"></i>';} ?>
    </div>
    <div class="col-sm">
    <?php echo "DOGE USD"."</br>".$doge = $qdata->{'data'}->{'doge_usdt'}->{'askPrice'}."</br>". $doge_y = $qdata->{'data'}->{'doge_usdt'}->{'priceChange24h'}; ?>
    <?php if($doge_y<0){echo '<i class="fa fa-arrow-down" style="color:red" aria-hidden="true"></i>';}elseif($doge_y>0){echo '<i class="fa fa-arrow-up" style="color:green"></i>';} ?>
    <?php echo '</br>'.'<i class="fa fa-arrow-down" style="color:red" aria-hidden="true"></i>'.$qdata->{'data'}->{'doge_usdt'}->{'low'}."</br>".$qdata->{'data'}->{'doge_usdt'}->{'high'}.'<i class="fa fa-arrow-up" style="color:green"></i>' ?>
    </div>
    <div class="col-sm">
    <?php echo "WINK USD"."</br>".$qdata->{'data'}->{'win_dkkt'}->{'askPrice'}."</br>". $win_y=$qdata->{'data'}->{'win_dkkt'}->{'priceChange24h'}; ?>
    <?php if($win_y<0){echo '<i class="fa fa-arrow-down" style="color:red" aria-hidden="true"></i>';}elseif($win_y>0){echo '<i class="fa fa-arrow-up" style="color:green"></i>';} ?>
    </div>
    <div class="col-sm">
    <?php echo "CHILIZ USD"."</br>".$qdata->{'data'}->{'chz_usdt'}->{'askPrice'}."</br>". $chz_y =$qdata->{'data'}->{'chz_usdt'}->{'priceChange24h'}; ?>
    <?php if($chz_y<0){echo '<i class="fa fa-arrow-down" style="color:red" aria-hidden="true"></i>';}elseif($chz_y>0){echo '<i class="fa fa-arrow-up" style="color:green"></i>';} ?>
    </div>
  </div>
  </div>

