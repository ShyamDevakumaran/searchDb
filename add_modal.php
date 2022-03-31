<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">ADD NEW JBQUERY</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-20">
						<label class="control-label modal-label">KEYWORD</label>
					</div>
					<div class="col-sm-20">
						<input type="text" class="form-control" name="keyword" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-20">
						<label class="control-label modal-label">DESCRIPTION</label>
					</div>
					<div class="col-sm-20">
						<input type="text" class="form-control" name="description" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-20">
						<label class="control-label modal-label">COMMAND</label>
					</div>
					<div class="col-sm-20">
						<input type="text" class="form-control" name="command" required>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> CANCEL</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> SAVE</a>
			</form>
            </div>

        </div>
    </div>
</div>