<div class="row">
	<div class="col-sm-12">
		<div class="tabbable">
			<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
				<li class="active">
					<a data-toggle="tab" href="#panel_overview">
						Overview
					</a>
				</li>
				<li>
					<a data-toggle="tab" href="#panel_user_locations">
						Locations
					</a>
				</li>
				<li>
					<a data-toggle="tab" href="#panel_edit_account">
						Edit Account
					</a>
				</li>
			</ul>
			<div class="tab-content">
				<div id="panel_overview" class="tab-pane in active">
					<div class="row">
						<div class="col-sm-5 col-md-4">
							<div class="user-left">
								<div class="center">
									<h4>{!! $user->first_name !!} {!! $user->last_name !!}</h4>
									<small>UUID: </small>
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="user-image">
											<div class="fileupload-new thumbnail">
												@if($user->pic)
												<img src="{!! url('/').'/uploads/users/'.$user->pic !!}" alt="img"/>
												@else
												<img src="http://placehold.it/300x300" alt="..." />
												@endif
											</div>
											<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
											<div class="user-image-buttons">
												<span class="btn btn-teal btn-file btn-sm"><span class="fileupload-new"><i class="fa fa-pencil"></i></span><span class="fileupload-exists"><i class="fa fa-pencil"></i></span>
												<input type="file">
											</span>
											<a href="#" class="btn fileupload-exists btn-bricky btn-sm" data-dismiss="fileupload">
												<i class="fa fa-times"></i>
											</a>
										</div>
									</div>
								</div>
								<hr>
								<p>
									<a class="btn btn-twitter btn-sm btn-squared"> <i class="fa fa-twitter"></i> </a>
									<a class="btn btn-linkedin btn-sm btn-squared"> <i class="fa fa-linkedin"></i> </a>
									<a class="btn btn-google-plus btn-sm btn-squared"> <i class="fa fa-google-plus"></i> </a>
									<a class="btn btn-github btn-sm btn-squared"> <i class="fa fa-github"></i> </a>
								</p>
								<hr>
							</div>
							<table class="table table-condensed table-hover">
								<thead>
									<tr>
										<th colspan="3">Contact Information</th>
									</tr>
								</thead>
								<tbody>
									@if($user->Profile->company)
									<tr>
										<td>Company:</td>
										<td>
											<a href="#">
												{!! $user->Profile->company !!}
											</a></td>
											<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
										</tr>
										@endif
										@if($user->Profile->website)
										<tr>
											<td>Website:</td>
											<td>
												<a href="#">
													{{ @$user->Profile->website }}
												</a></td>
												<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
											</tr>
											@endif
											@if($user->email)
											<tr>
												<td>Email:</td>
												<td>
													<a href="">
														{!! $user->email !!}
													</a></td>
													<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
												</tr>
												@endif
												@if($user->Profile->phone)
												<tr>
													<td>Phone:</td>
													<td>{!! $user->Profile->phone !!}</td>
													<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
												</tr>
												@endif
												@if($user->Profile->skypeid)
												<tr>
													<td>Skype</td>
													<td>
														<a href="">
															{!! $user->Profile->skypeid !!}
														</a></td>
														<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
													</tr>
													@endif
												</tbody>
											</table>
											@if($user->Profile->is_employee)
											<table class="table table-condensed table-hover">
												<thead>
													<tr>
														<th colspan="3">General information</th>
													</tr>
												</thead>
												<tbody>
													@if($user->Profile->position)
													<tr>
														<td>Position</td>
														<td>{!! $user->Profile->position !!}</td>
														<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
													</tr>
													@endif
													@if($user->Profile->employment_title)
													<tr>
														<td>Position</td>
														<td>{!! $user->Profile->employment_title !!}</td>
														<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
													</tr>
													@endif
													@if($user->Profile->supervisor)
													<tr>
														<td>Supervisor</td>
														<td>
															<a href="#">
																{!! $user->Profile->supervisor !!}
															</a></td>
															<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
														</tr>
														@endif
														@if($user->Profile->employment_status)
														<tr>
															<td>Status</td>
															<td><span class="label label-sm label-info">{!! $user->Profile->employment_status !!}</span></td>
															<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
														</tr>
														@endif
														@if($user->Profile->employment_role)
														<tr>
															<td>Role</td>
															<td><span class="label label-sm label-info">{!! $user->Profile->employment_role !!}</span></td>
															<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
														</tr>
														@endif
													</tbody>
												</table>
												@endif
												<table class="table table-condensed table-hover">
													<thead>
														<tr>
															<th colspan="3">Additional information</th>
														</tr>
													</thead>
													<tbody>
														@if($user->last_login)
														<tr>
															<td>Last Logged In</td>
															<td>{!! $user->last_login !!}</td>
															<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
														</tr>
														@endif
														@if($user->Profile->dob)
														<tr>
															<td>Birth Date:</td>
															<td>{!! $user->Profile->dob !!}</td>
															<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
														</tr>
														@endif
														@if($user->Profile->gender)
														<tr>
															<td>Gender:</td>
															<td style="text-transform: capitalize;">{!! $user->Profile->gender !!}</td>
															<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
														</tr>
														@endif
													</tbody>
												</table>
											</div>
										</div>
										<div class="col-sm-7 col-md-8">
											@if($user->Profile->bio)
											<h3>About Me </h3>
											<p>{!! $user->Profile->bio !!}</p>
											@endif
											<!-- 		<p>
													Be the first to get savings and offers when you sign up for Graces's emails and texts.
											</p> -->
										</div>
									</div>
								</div>
								@include('partials.user.myaccountedit')
								{{--@include('partials.header.top-bar')--}}
								<div id="panel_user_locations" class="tab-pane">
									<table class="table table-striped table-bordered table-hover" id="projects">
										<thead>
											<tr>
												<th class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></th>
													<th>Project Name</th>
													<th class="hidden-xs">Client</th>
													<th>Proj Comp</th>
													<th class="hidden-xs">%Comp</th>
													<th class="hidden-xs center">Priority</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="center">
														<div class="checkbox-table">
															<label>
																<input type="checkbox" class="flat-grey">
															</label>
														</div></td>
														<td>IT Help Desk</td>
														<td class="hidden-xs">Master Company</td>
														<td>11 november 2014</td>
														<td class="hidden-xs">
															<div class="progress progress-striped active progress-sm">
																<div style="width: 70%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar" class="progress-bar progress-bar-warning">
																	<span class="sr-only"> 70% Complete (danger)</span>
																</div>
															</div></td>
															<td class="center hidden-xs"><span class="label label-danger">Critical</span></td>
															<td class="center">
																<div class="visible-md visible-lg hidden-sm hidden-xs">
																	<a href="#" class="btn btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
																	<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
																	<a href="#" class="btn btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
																</div>
																<div class="visible-xs visible-sm hidden-md hidden-lg">
																	<div class="btn-group">
																		<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																			<i class="fa fa-cog"></i> <span class="caret"></span>
																		</a>
																		<ul role="menu" class="dropdown-menu pull-right">
																			<li role="presentation">
																				<a role="menuitem" tabindex="-1" href="#">
																					<i class="fa fa-edit"></i> Edit
																				</a>
																			</li>
																			<li role="presentation">
																				<a role="menuitem" tabindex="-1" href="#">
																					<i class="fa fa-share"></i> Share
																				</a>
																			</li>
																			<li role="presentation">
																				<a role="menuitem" tabindex="-1" href="#">
																					<i class="fa fa-times"></i> Remove
																				</a>
																			</li>
																		</ul>
																	</div>
																</div></td>
															</tr>
															<tr>
																<td class="center">
																	<div class="checkbox-table">
																		<label>
																			<input type="checkbox" class="flat-grey">
																		</label>
																	</div></td>
																	<td>PM New Product Dev</td>
																	<td class="hidden-xs">Brand Company</td>
																	<td>12 june 2014</td>
																	<td class="hidden-xs">
																		<div class="progress progress-striped active progress-sm">
																			<div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-info">
																				<span class="sr-only"> 40% Complete</span>
																			</div>
																		</div></td>
																		<td class="center hidden-xs"><span class="label label-warning">High</span></td>
																		<td class="center">
																			<div class="visible-md visible-lg hidden-sm hidden-xs">
																				<a href="#" class="btn btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
																				<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
																				<a href="#" class="btn btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
																			</div>
																			<div class="visible-xs visible-sm hidden-md hidden-lg">
																				<div class="btn-group">
																					<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																						<i class="fa fa-cog"></i> <span class="caret"></span>
																					</a>
																					<ul role="menu" class="dropdown-menu pull-right">
																						<li role="presentation">
																							<a role="menuitem" tabindex="-1" href="#">
																								<i class="fa fa-edit"></i> Edit
																							</a>
																						</li>
																						<li role="presentation">
																							<a role="menuitem" tabindex="-1" href="#">
																								<i class="fa fa-share"></i> Share
																							</a>
																						</li>
																						<li role="presentation">
																							<a role="menuitem" tabindex="-1" href="#">
																								<i class="fa fa-times"></i> Remove
																							</a>
																						</li>
																					</ul>
																				</div>
																			</div></td>
																		</tr>
																		<tr>
																			<td class="center">
																				<div class="checkbox-table">
																					<label>
																						<input type="checkbox" class="flat-grey">
																					</label>
																				</div></td>
																				<td>ClipTheme Web Site</td>
																				<td class="hidden-xs">Internal</td>
																				<td>11 november 2014</td>
																				<td class="hidden-xs">
																					<div class="progress progress-striped active progress-sm">
																						<div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
																							<span class="sr-only"> 90% Complete</span>
																						</div>
																					</div></td>
																					<td class="center hidden-xs"><span class="label label-success">Normal</span></td>
																					<td class="center">
																						<div class="visible-md visible-lg hidden-sm hidden-xs">
																							<a href="#" class="btn btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
																							<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
																							<a href="#" class="btn btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
																						</div>
																						<div class="visible-xs visible-sm hidden-md hidden-lg">
																							<div class="btn-group">
																								<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																									<i class="fa fa-cog"></i> <span class="caret"></span>
																								</a>
																								<ul role="menu" class="dropdown-menu pull-right">
																									<li role="presentation">
																										<a role="menuitem" tabindex="-1" href="#">
																											<i class="fa fa-edit"></i> Edit
																										</a>
																									</li>
																									<li role="presentation">
																										<a role="menuitem" tabindex="-1" href="#">
																											<i class="fa fa-share"></i> Share
																										</a>
																									</li>
																									<li role="presentation">
																										<a role="menuitem" tabindex="-1" href="#">
																											<i class="fa fa-times"></i> Remove
																										</a>
																									</li>
																								</ul>
																							</div>
																						</div></td>
																					</tr>
																					<tr>
																						<td class="center">
																							<div class="checkbox-table">
																								<label>
																									<input type="checkbox" class="flat-grey">
																								</label>
																							</div></td>
																							<td>Local Ad</td>
																							<td class="hidden-xs">UI Fab</td>
																							<td>15 april 2014</td>
																							<td class="hidden-xs">
																								<div class="progress progress-striped active progress-sm">
																									<div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-warning">
																										<span class="sr-only"> 50% Complete</span>
																									</div>
																								</div></td>
																								<td class="center hidden-xs"><span class="label label-success">Normal</span></td>
																								<td class="center">
																									<div class="visible-md visible-lg hidden-sm hidden-xs">
																										<a href="#" class="btn btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
																										<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
																										<a href="#" class="btn btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
																									</div>
																									<div class="visible-xs visible-sm hidden-md hidden-lg">
																										<div class="btn-group">
																											<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																												<i class="fa fa-cog"></i> <span class="caret"></span>
																											</a>
																											<ul role="menu" class="dropdown-menu pull-right">
																												<li role="presentation">
																													<a role="menuitem" tabindex="-1" href="#">
																														<i class="fa fa-edit"></i> Edit
																													</a>
																												</li>
																												<li role="presentation">
																													<a role="menuitem" tabindex="-1" href="#">
																														<i class="fa fa-share"></i> Share
																													</a>
																												</li>
																												<li role="presentation">
																													<a role="menuitem" tabindex="-1" href="#">
																														<i class="fa fa-times"></i> Remove
																													</a>
																												</li>
																											</ul>
																										</div>
																									</div></td>
																								</tr>
																								<tr>
																									<td class="center">
																										<div class="checkbox-table">
																											<label>
																												<input type="checkbox" class="flat-grey">
																											</label>
																										</div></td>
																										<td>Design new theme</td>
																										<td class="hidden-xs">Internal</td>
																										<td>2 october 2014</td>
																										<td class="hidden-xs">
																											<div class="progress progress-striped active progress-sm">
																												<div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-success">
																													<span class="sr-only"> 20% Complete (warning)</span>
																												</div>
																											</div></td>
																											<td class="center hidden-xs"><span class="label label-danger">Critical</span></td>
																											<td class="center">
																												<div class="visible-md visible-lg hidden-sm hidden-xs">
																													<a href="#" class="btn btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
																													<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
																													<a href="#" class="btn btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
																												</div>
																												<div class="visible-xs visible-sm hidden-md hidden-lg">
																													<div class="btn-group">
																														<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																															<i class="fa fa-cog"></i> <span class="caret"></span>
																														</a>
																														<ul role="menu" class="dropdown-menu pull-right">
																															<li role="presentation">
																																<a role="menuitem" tabindex="-1" href="#">
																																	<i class="fa fa-edit"></i> Edit
																																</a>
																															</li>
																															<li role="presentation">
																																<a role="menuitem" tabindex="-1" href="#">
																																	<i class="fa fa-share"></i> Share
																																</a>
																															</li>
																															<li role="presentation">
																																<a role="menuitem" tabindex="-1" href="#">
																																	<i class="fa fa-times"></i> Remove
																																</a>
																															</li>
																														</ul>
																													</div>
																												</div></td>
																											</tr>
																											<tr>
																												<td class="center">
																													<div class="checkbox-table">
																														<label>
																															<input type="checkbox" class="flat-grey">
																														</label>
																													</div></td>
																													<td>IT Help Desk</td>
																													<td class="hidden-xs">Designer TM</td>
																													<td>6 december 2014</td>
																													<td class="hidden-xs">
																														<div class="progress progress-striped active progress-sm">
																															<div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
																																<span class="sr-only"> 40% Complete (warning)</span>
																															</div>
																														</div></td>
																														<td class="center hidden-xs"><span class="label label-warning">High</span></td>
																														<td class="center">
																															<div class="visible-md visible-lg hidden-sm hidden-xs">
																																<a href="#" class="btn btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
																																<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
																																<a href="#" class="btn btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
																															</div>
																															<div class="visible-xs visible-sm hidden-md hidden-lg">
																																<div class="btn-group">
																																	<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																																		<i class="fa fa-cog"></i> <span class="caret"></span>
																																	</a>
																																	<ul role="menu" class="dropdown-menu pull-right">
																																		<li role="presentation">
																																			<a role="menuitem" tabindex="-1" href="#">
																																				<i class="fa fa-edit"></i> Edit
																																			</a>
																																		</li>
																																		<li role="presentation">
																																			<a role="menuitem" tabindex="-1" href="#">
																																				<i class="fa fa-share"></i> Share
																																			</a>
																																		</li>
																																		<li role="presentation">
																																			<a role="menuitem" tabindex="-1" href="#">
																																				<i class="fa fa-times"></i> Remove
																																			</a>
																																		</li>
																																	</ul>
																																</div>
																															</div></td>
																														</tr>
																													</tbody>
																												</table>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>