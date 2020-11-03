<nav class="fh5co-nav" role="navigation">
    <div class="container">
        <div class="top-menu">
            <div class="row">
                <div class="col-sm-2">
                    <div id="fh5co-logo"><a href="../index.php"><img src="../../images/T-Logo.png" alt=""></a></div>
                </div>
                <div class="col-sm-10 text-right menu-1">
                    <ul>
                        <!-- set active for the different pages -->
                        <li class="<?php echo $currentPage == 'index' ? 'active' : '' ?>"><a href="../index.php">Portfolio</a></li>
                        <li class="<?php echo $currentPage == 'resume' ? 'active' : '' ?>"><a href="../pages/resume.php">Resume</a></li>
                        <li class="<?php echo $currentPage == 'about' ? 'active' : '' ?>"><a href="../pages/about.php">About Me</a></li>
                        <!-- <li class="has-dropdown"><a href="single.html">About Me</a>
								<ul class="dropdown">
									<li><a href="#">Infrastructure</a></li>
									<li><a href="#">Residential</a></li>
									<li><a href="#">Environmental</a></li>
									<li><a href="#">Megabuilders</a></li>
								</ul>
							</li> -->
                        <li class="<?php echo $currentPage == 'contact' ? 'active' : '' ?>"><a href="../pages/contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</nav>