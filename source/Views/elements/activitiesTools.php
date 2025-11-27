<?php
$enableTimeframes = isset($enableTimeframes) ? $enableTimeframes : false;
?>

<form method="POST" action="<?=$actionStr?>" class="form-inline border-bottom pb-3" style="float:right;padding-left:5px; padding-right:5px; width:100%">
	<div class="row" >

		<div class="col-2">
				<input class="form-control" id="currentDate" name="currentDate" type="date" value="<?=$currentDate?>">
		</div>
		<div class="col-2">
			<?php
				$this->set('selectedItem', $typeID);
				$this->set('selectName', 'typeID');
				$this->set('selectID', 'typeID');
				?>
		  <?=$this->element('select');?>
		</div>
		<?php
		$this->set('selectedItem',$metric);
		$this->set('selectName', 'metric');
		$this->set('selectID', 'metric');
		$this->set('elements', $metrics);
		?>
		<div class="col-2">
			<?=$this->element('select');?>
		</div>
		
		<div class="col-1">
			<button type="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;
		</div>
		<div class="col-1">
			&nbsp;
		</div>
		<div class="col-3 text-end">
			<div class="">
				<?=$this->element('dateNav');?>
			</div>
		</div>
	</div>
	<div class="row" >
		<div class="col-9">
			&nbsp;
		</div>
		<div class="col-3 float-end">
			<table class="table table-sm table-bordered">
				<thead>
			    <tr>
			      <th scope="col">from <?=date("z", strtotime($fromDate))?></th>
			      <th scope="col">to <?=date("z", strtotime($toDate))?> / <?=date("z", strtotime(date('12-12-31')))?></th>
						<th scope="col">by</th>
			    </tr>
				</thead>
				<tbody>
			    <tr>
			      <td><?=$fromDate?></td>
			      <td><?=$toDate?></td>
			      <td><?=$this->action?></td>
			    </tr>
				</tbody>
			</table>
		</div>
	</div>
</form>
