<?php require_once "includes/header.php"; ?>

<div class="home-banner section-padding text-center text-light home-banner-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="display-table banner-min-height">
					<div class="display-table-cell">
						<h2>Welcome to <?php echo get_school_name(); ?></h2>
						<?php if (!is_user_logged_in()) { ?>
							<a href="login.php" class="btn btn-success">Login</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="about-section section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="single-about">
					<h3>ABOUT</h3>
					<img src="assets/images/banner-1.jpg" alt="">
					<?php
					$query = "SELECT * FROM page_contents WHERE page_name='about_page'";
					$result = mysqli_query($conn, $query);
					$row = mysqli_fetch_assoc($result);
					$page_text = $row['page_text'];
					$first_para = substr($page_text, strpos($page_text, "<p"), strpos($page_text, "</p>") + 4);
					echo $first_para;
					?>
					<a href="about.php" class="btn btn-success">Read More</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="single-about">
					<h3>Teachers</h3>
					<img src="assets/images/banner-3.jpg" alt="">
					<?php
					$query = "SELECT * FROM page_contents WHERE page_name='teacher_page'";
					$result = mysqli_query($conn, $query);
					$row = mysqli_fetch_assoc($result);
					echo $row['page_text'];
					?>
					<p><a href="teachers.php" class="btn btn-success">See Teachers</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
</div>
<?php require_once "includes/footer.php"; ?>