<div id="add_expense" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Claim</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Claim Form ID</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Claim Type</label>
												<select class="select">
													<option>Allowances</option>
													<option>BYOD</option>
													<option>Medical</option>
													<option>Mileage</option>
													<option>Miscellaneous</option>
													<option>Mobile Phone Reimbursement</option>
													<option>Travel</option>
													<option>Postage/Stamps</option>
													<option>Printing&Stationeries</option>
													<option>Refreshment</option>
													<option>Staff Refreshment</option>
													<option>Transportation</option>

											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Purchase Date</label>
												<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Remarks </label>
												<select class="select">
												<input placeholder="" class="form-control" type="text">
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Amount</label>
												<input placeholder="$50" class="form-control" type="text">
											</div>
										</div>
										
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Status</label>
												<select class="select">
													<option>Pending</option>
													<option>Approved</option>
													<option>Rejected</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Attachments</label>
												<input class="form-control" type="file">
											</div>
										</div>
									</div>
									<div class="attach-files">
										<ul>
											<li>
												<img src="assets/img/placeholder.jpg" alt="">
												<a href="#" class="fa fa-close file-remove"></a>
											</li>
											<li>
												<img src="assets/img/placeholder.jpg" alt="">
												<a href="#" class="fa fa-close file-remove"></a>
											</li>
										</ul>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>