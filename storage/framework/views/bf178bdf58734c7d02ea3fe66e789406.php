<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat Pencarian Pada Laravel - www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/app.css')); ?>">
</head>
<body>
 
	<div class="container">
		<div class="card">
			<div class="card-body">
				
 
				<h2 class="text-center"><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
 
				<h3>Data Pegawai</h3>
 
				<p>Cari Data Pegawai :</p>
 
				<div class="form-group">
					
				</div>
				<form action="/pegawai/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="<?php echo e(old('cari')); ?>">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>
 
				<br/>
 
				<table class="table table-bordered">
					<tr>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Umur</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
					<?php $__currentLoopData = $name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($p->ininama); ?></td>
						<!-- <td><?php echo e($p->pegawai_jabatan); ?></td>
						<td><?php echo e($p->pegawai_umur); ?></td>
						<td><?php echo e($p->pegawai_alamat); ?></td> -->
						<td>
							<a class="btn btn-warning btn-sm" href="">Edit</a>
							<a class="btn btn-danger btn-sm" href="">Hapus</a>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
 
				<br/>
				<!-- Halaman : <?php echo e($profile->currentPage()); ?> <br/>
				Jumlah Data : <?php echo e($profile->total()); ?> <br/>
				Data Per Halaman : <?php echo e($profile->perPage()); ?> <br/> -->
				<br/>
 
				<!-- <?php echo e($profile->links()); ?> -->
			</div>
		</div>
	</div>
 
 
</body>
</html><?php /**PATH D:\Kuliah\Semester 6\Web Programming\gslc1-individu\resources\views/profile/data.blade.php ENDPATH**/ ?>