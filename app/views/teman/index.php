
<div class="container  col-sm-8">
<?php foreach ($data['nama_teman'] as $nama_t) : ?>
    	<ul class="list-group mb-4">
    		<li class="list-group-item list-group-item-action active"><?= $nama_t['Nama'] ?></li>
    		<li class="list-group-item list-group-item-action"><?= $nama_t['Alamat'] ?></li>
    		<li class="list-group-item list-group-item-action"><?= $nama_t['Unit']?></li>
    	</ul>
    <?php endforeach; ?> 
</div>

    
