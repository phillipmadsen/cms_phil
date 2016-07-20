<div id="reviews" class="clearfix">
	<ol class="commentlist clearfix">
		<li class="comment even thread-even depth-1" id="li-comment-1">
			<div id="comment-1" class="comment-wrap clearfix">
				<div class="comment-meta">
					<div class="comment-author vcard">
						<span class="comment-avatar clearfix">
							<img alt="" src="http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60" height="60" width="60"></span>
					</div>
				</div>
				<div class="comment-content clearfix">
					<div class="comment-author">
						John Doe
						<span>
							<a href="#" title="Permalink to this comment">April 24, 2014 at 10:46AM</a>
						</span>
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo perferendis aliquid tenetur. Aliquid, tempora, sit aliquam officiis nihil autem eum at repellendus facilis quaerat consequatur commodi laborum saepe non nemo nam maxime quis error tempore possimus est quasi reprehenderit fuga!
					</p>
					<div class="review-comment-ratings"> <i class="icon-star3"></i> <i class="icon-star3"></i>
						<i class="icon-star3"></i>
						<i class="icon-star3"></i>
						<i class="icon-star-half-full"></i>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</li>
		<li class="comment even thread-even depth-1" id="li-comment-1">
			<div id="comment-1" class="comment-wrap clearfix">
				<div class="comment-meta">
					<div class="comment-author vcard">
						<span class="comment-avatar clearfix">
							<img alt="" src="http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60" height="60" width="60"></span>
					</div>
				</div>
				<div class="comment-content clearfix">
					<div class="comment-author">
						Mary Jane
						<span>
							<a href="#" title="Permalink to this comment">June 16, 2014 at 6:00PM</a>
						</span>
					</div>
					<p>
						Quasi, blanditiis, neque ipsum numquam odit asperiores hic dolor necessitatibus libero sequi amet voluptatibus ipsam velit qui harum temporibus cum nemo iste aperiam explicabo fuga odio ratione sint fugiat consequuntur vitae adipisci delectus eum incidunt possimus tenetur excepturi at accusantium quod doloremque reprehenderit aut expedita labore error atque?
					</p>
					<div class="review-comment-ratings">
						<i class="icon-star3"></i>
						<i class="icon-star3"></i>
						<i class="icon-star3"></i>
						<i class="icon-star-empty"></i>
						<i class="icon-star-empty"></i>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</li>
	</ol>
	<!-- Modal Reviews ============================================= -->
	<a href="#" data-toggle="modal" data-target="#reviewFormModal" class="button button-3d nomargin fright">Add a Review</a>
	<div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog" aria-labelledby="reviewFormModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="reviewFormModalLabel">Submit a Review</h4>
				</div>
				<div class="modal-body">
					<form class="nobottommargin" id="template-reviewform" name="template-reviewform" action="#" method="post">
						<div class="col_half">
							<label for="template-reviewform-name">
								Name
								<small>*</small>
							</label>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="icon-user"></i>
								</span>
								<input type="text" id="template-reviewform-name" name="template-reviewform-name" value="" class="form-control required"></div>
						</div>
						<div class="col_half col_last">
							<label for="template-reviewform-email">
								Email
								<small>*</small>
							</label>
							<div class="input-group">
								<span class="input-group-addon">@</span>
								<input type="email" id="template-reviewform-email" name="template-reviewform-email" value="" class="required email form-control"></div>
						</div>
						<div class="clear"></div>
						<div class="col_full col_last">
							<label for="template-reviewform-rating">Rating</label>
							<select id="template-reviewform-rating" name="template-reviewform-rating" class="form-control">
								<option value="">-- Select One --</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
						<div class="clear"></div>
						<div class="col_full">
							<label for="template-reviewform-comment">
								Comment
								<small>*</small>
							</label>
							<textarea class="required form-control" id="template-reviewform-comment" name="template-reviewform-comment" rows="6" cols="30"></textarea>
						</div>
						<div class="col_full nobottommargin">
							<button class="button button-3d nomargin" type="submit" id="template-reviewform-submit" name="template-reviewform-submit" value="submit">Submit Review</button>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- Modal Reviews End -->
</div>