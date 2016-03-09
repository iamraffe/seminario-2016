
</div> <!-- ./container -->

	<footer>
		<div class="container">
			<div class="row">
        <p>© 3<sup>er</sup> Seminario Internacional de Seguridad del Paciente y Excelencia Clínica</p>
        <a href="<?php echo DIR;?>condiciones">Condiciones de uso</a>
			</div>
		</div>
	</footer>
<!-- JS -->
<?php
	helpers\assets::js(array(
		'//code.jquery.com/jquery-1.11.2.min.js',
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', 
		'//cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js',
		'//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.js'
	)) ;

	echo $data['js'];
?>

</body>
</html>
