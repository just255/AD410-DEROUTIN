<?php

include 'Views/templates/header.php';
?>
        <!-- Main Content -->
<div id="container">
		<div><button type="button" class="btn btn-primary" id="loadSurvey" data-toggle="modal" data-target="#loadBox" data-backdrop="static">Load a survey</button></div>
		<div class="modal fade" id="loadBox" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Load</h4>
					</div>
					<div class="modal-body">
						<div class="list-group" id="surveyNames"></div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal" id="loadBtn">Load</button>
						<button type="button" class="btn btn-default" data-dismiss="modal" id="cancelLoad">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		</div>

<?php include 'Views/templates/footer.php';?>