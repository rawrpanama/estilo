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
        var pass=$(this).parent('td').parent('tr').find('#pass').val();
        var correo=$(this).parent('td').parent('tr').find('#mail').val();
        var telefono=$(this).parent('td').parent('tr').find('#tel').val();
        var dui=$(this).parent('td').parent('tr').find('#dui').val();
        var tipo=$(this).parent('td').parent('tr').find('#tipo').val();
		$.post('js/ejecutar.php',{
			Caso:'Modificar',
			Id:$(this).attr('data-id'),
			User:usuario,
            Name:nombre,
			Ape:apellido,
            Pass:pass,
            Correo:correo,
            Telefono:telefono,
            Dui:dui,
            Tipo:tipo
		},function(e){
			alert(e);
		});
	});
});