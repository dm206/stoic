	
			<?php  
					if ($this->units == UNITS_STATUTE)
					{
						$distance = round($this->stopwatch->meters2yards($record['distance'],0));
					} else
					{
						$distance = $record['distance'];
					}
					$calories = $record['calories'];
			?>


	<form id="editActivity" method="POST" action="<?=APP_NAME?>/activities/edit" class="rounded p-4" style="">
		<div class="col-6 mb-1 float-start">
			<div class="row">
				
				<div class="mb-2">
	  				ID: <?=$record['id']?>
	  				<input type="hidden" class="form-control" id="id" name="id" value="<?=$record['id']?>" >
	  			</div>

				<div class="mb-2">
	  				<label for="activitytype_id class="form-label">City/Town</label>
				    <input type="text" class="form-control" id="type" name="start_date_local" value="<?=$record['start_locality']?>" type="datetime-local">
				</div>
				<div class="mb-2">
	  				<label for="activitytype_id class="form-label">Date Time</label>
				    <input type="text" class="form-control" id="type" name="start_date_local" value="<?=$record['start_date_local']?>" type="datetime-local">
				</div>
				<div class="mb-2">
	  				<label for="activitytype_id class="form-label">Activity Type</label>
				    <input type="text" class="form-control" id="type" name="activitytype_id" value="<?=$record['activitytype_id']?>">
				</div>
				<div class="mb-2">
				    <label for="name" class="form-label" >Subject</label>
				    <input type="text" class="form-control" id="name" name="name" value="<?=$record['name']?>">
				</div>
				<div class="mb-2">
				    <label for="distance" class="form-label" >Distance</label>
				    <input type="text" class="form-control" id="distance" name="distance" value="<?=$distance?>">  
				</div>
				<div class="mb-2">
				    <label for="calories" class="form-label" >calories</label>
				     <input type="text" class="form-control" id="calories" name="calories" value="<?=$calories?>">  
				</div>
				  <button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>