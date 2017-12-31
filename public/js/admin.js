$(document).ready(function(){

	//Show-Mails

	$('.delete').click(function(){
		return confirm('Voulez vous vraiment supprimez ce mail ?');
	});

	//Skills

	$('.delete-skills').click(function(){
		return confirm('Voulez vous vraiment supprimez cette compétence ?');
	});

	$('.delete-projects').click(function(){
		return confirm('Voulez vous vraiment supprimez ce projet ?');
	});

});
