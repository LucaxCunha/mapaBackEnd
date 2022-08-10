<?php 
 include 'dados/produtos.php';
 include 'function/real.php';?>

  <div class="slider">
  <div class="slider--controls"  style="height: 50px">
    <div class="slider--control" onclick="goPrev()"><img src="img mapa php\b7439212dd8c9c0ba0bf86c7c31bd7b2.jpg" width="1520px"></div>
    <div class="slider--control" onclick="goNext()"><img src="" width="500px"></div>
  </div>
  <div class="slider--width" style="width: calc(100vw * 2)">
    <div class="slider--item" style="background-image: url('img mapa php\header.jpg');"></div>    
    <div class="slider--item" style="background-image: url('');"></div>     
  </div>  
  <h1 class="h1s">MARMITAS</h1>
    <div class="produtos">
  <?php
    foreach($produto as $pdt):    
  ?>   
   <div class="marmitas">       
        <a id="product" href="index.php?p=produto.php&id=<?=$pdt['id']?>">     
        <img src="<?=$pdt['imagem']?>" style="width:200px; border-radius: 10%;">    
        <p><?=$pdt['nome']?></p>
        <p id="valor"><?=BRL($pdt['valor'])?></p></a>    
    </div>  
  <?php 
  endforeach;?> 
  </div>
</div>
