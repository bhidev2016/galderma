<div class="columns small-4 large-2">
<?php 
foreach ($items[0]['#location'] as $k => $item)
{
	if ($k == 'street')
	{
		print($item) . ', ';
	}
	if ($k == 'city')
	{
		print($item);
	}
} ?>
</div>