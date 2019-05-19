		<!-- Page section -->
		<div class="page-section blog-page">
			<div class="blog-warp">
				<div class="blog-track">
					<?php
					$months = [
						"01" => "Jan",
						"02" => "Fev",
						"03" => "Mar",
						"04" => "Abr",
						"05" => "Mai",
						"06" => "Jun",
						"07" => "Jul",
						"08" => "Ago",
						"09" => "Set",
						"10" => "Out",
						"11" => "Nov",
						"12" => "Dez"
					];
					foreach($posts as $posts_item)
					{
						$dt_and_time = explode(" ", $posts_item["dt_post"]);
						$dt_post = explode("-", $dt_and_time[0]);
						$time_post = explode(":", $dt_and_time[1]);

						$day = $dt_post[2];
						$month = $months[$dt_post[1]];
						$hour = $time_post[0];
					?>
					<div class="blog-post">
						<div class="blog-thumb set-bg" data-setbg="<?php echo $posts_item['image']; ?>">
							<div class="post-date">
								<h3><?php echo $day; ?></h3>
								<span><?php echo $month; ?>, ‘<?php echo $hour;  ?></span>
							</div>
						</div>
						<h2 class="post-title"><?php echo $posts_item["title"]; ?></h2>
						<div class="post-metas">
							<?php 
							foreach($photographers as $photographer)
							{
								if($photographer["id"] === $posts_item["fk_photographer"]){?>

									<div class="post-meta">By <?php echo $photographer["name"]; ?></div>|

								<?php }

							} 
							?>
							<div class="post-meta">In photography</div>
						</div>
						<p><?php echo $posts_item["description"]; ?></p>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- Page section end-->