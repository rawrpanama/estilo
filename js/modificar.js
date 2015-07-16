$(document).ready(function(){
	$(".eliminar").click(function(){
		$(this).parent('td').parent('tr').remove();
		$.post('js/ejecutar.php',{
			Caso:'Eliminar',
			Id:$(this).attr('data-id'),
		},function(e){
			alert(e);
		});

	});
	$(".modificar").click(function(){
		var usuario=$(this).parent('td').parent('tr').find('#user').val();
		var nombre=$(this).parent('td').parent('tr').find('#name').val();
		var apellido=$(this).parent('td').parent('tr').find('#ape').val();
        var correo=$(this).parent('td').parent('tr').find('#mail').val();
        var telefono=$(this).parent('td').parent('tr').find('#tel').val();
        var dui=$(this).parent('td').parent('tr').find('#dui').val();
		$.post('js/ejecutar.php',{
			Caso:'Modificar',
			Id:$(this).attr('data-id'),
			User:usuario,
            Name:nombre,
			      Ape:apellido,
            Correo:correo,
            Telefono:telefono,
            Dui:dui,
		},function(e){
			alert(e);
		});
	});
	$(".delete").click(function(){
		$(this).parent('td').parent('tr').remove();
		$.post('js/ejecutar.php',{
			Caso:'Delete',
			Idm:$(this).attr('data-id'),
		},function(e){
			alert(e);
		});
	});
	$(".modify").click(function(){
		var nombre=$(this).parent('td').parent('tr').find('#name').val();
		var descri=$(this).parent('td').parent('tr').find('#descri').val();
    var tipo=$(this).parent('td').parent('tr').find('#tipo').val();
    var precio=$(this).parent('td').parent('tr').find('#precio').val();
    var vis=$(this).parent('td').parent('tr').find('#vis').val();
		$.post('js/ejecutar.php',{
			Caso:'Modify',
			Idm:$(this).attr('data-id'),
            Name:nombre,
			      Descri:descri,
            Tipo:tipo,
            Precio:precio,
            Vis:vis
		},function(e){
			alert(e);
		});
	});
});
