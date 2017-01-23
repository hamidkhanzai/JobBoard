
    <?php foreach ($job as $j ): ?>
<div class="content">
        <h3>Postion</h3>
        <p><?=$j->title; ?></p>
    
        <h3>Job Category</h3>
        
        <p><?=($j->type==1?"Software Developer":"Other");?></p>
       
        <h3>Job Summer</h3>
        <p><?=$j->summery;?> </p>
        
    </div>
    <?php endforeach;?>
