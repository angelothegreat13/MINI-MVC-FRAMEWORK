<?php $this -> setSiteTitle('Contacts');?>


<?php $this -> start('body');?>

<div class="col-md-12">
	<h1 class="text-center">Surveys</h1>
	
<?php 
	// dd($data);
	// foreach ($data['questions'] as $questions) 
	// {	
	// 	foreach ($questions as $question) 
	// 	{
	// 	echo '<h4>Question: '.$question -> questiondesc.'?</h4>';
			foreach ($data['answers'] as $answers) {
				foreach ($answers as $answer) {
					echo $answer -> answerdesc .' - '.$answer -> total .'<br>';
				}
			}
	// 	}
	// }
?>

</div>

<?php $this -> end();?>

