<header class="main-header">
    <nav class="navbar navbar-static-top">
       <div class="promo-section">
       <b> Submit Your Christmas Tree Decor to bradystrees@gmail.com for a Chance to Win a Christmas Tree in Our Raffle!</b> 
            
        </div>
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand"><img style="width:60px;" src="images/company logo.png"></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUCTS <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						  <?php
						 
							$conn = $pdo->open();
							try{
							  $stmt = $conn->prepare("SELECT * FROM category");
							  $stmt->execute();
							  foreach($stmt as $row){
								echo "
								  <li><a href='category.php?category=".$row['cat_slug']."'>".$row['name']."</a></li>
								";                  
							  }
							}
							catch(PDOException $e){
							  echo "There is some problem in connection: " . $e->getMessage();
							}

							$pdo->close();

						  ?>
						</ul>
					 </li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="career.php">CAREER</a></li>
					
                </ul>
            <form method="POST" class="navbar-form navbar-left" action="search.php">
                    <div class="input-group">
                        <input type="text" class="form-control" id="navbar-search-input" name="keyword"
                            placeholder="Search for Product" required>
                        <span class="input-group-btn" id="searchBtn" style="display:none;">
                            <button type="submit" class="btn btn-default btn-flat"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                   
                   <li class="dropdown messages-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="label label-success cart_count"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have <span class="cart_count"></span> item(s) in cart</li>
                            <li>
                                <ul class="menu" id="cart_menu">
                                </ul>
                            </li>
                            <li class="footer"><a href="cart_view.php">Go to Cart</a></li>
                        </ul>
                    </li>
                    <?php
                    if (isset($_SESSION['user'])) {
                        $image = (!empty($user['photo'])) ? 'images/' . $user['photo'] : 'images/profile.jpg';
                        echo '
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="' . $image . '" class="user-image" alt="User Image">
                                    <span class="hidden-xs">' . $user['firstname'] . ' ' . $user['lastname'] . '</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="' . $image . '" class="img-circle" alt="User Image">
                                        <p>
                                            ' . $user['firstname'] . ' ' . $user['lastname'] . '
                                            <small>Member since ' . date('M. Y', strtotime($user['created_on'])) . '</small>
                                        </p>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        ';
                    } else {
                        echo "
                            <li><a href='login.php'>LOGIN</a></li>
                            <li><a href='signup.php'>SIGNUP</a></li>
                        ";
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="feature-section">
            <div class="menu-drawer__benefits">
								
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3 6V7.09091H13.3636V15.2727H10.0058C9.76255 14.3351 8.91927 13.6364 7.90909 13.6364C6.89891 13.6364 6.05564 14.3351 5.81236 15.2727H5.18182V12.5455H4.09091V16.3636H5.81236C6.05564 17.3013 6.89891 18 7.90909 18C8.91927 18 9.76255 17.3013 10.0058 16.3636H14.5396C14.7829 17.3013 15.6262 18 16.6364 18C17.6465 18 18.4898 17.3013 18.7331 16.3636H20.4545V11.9149L20.4202 11.8293L19.3293 8.55655L19.2109 8.18182H14.4545V6H3ZM3.54545 8.18182V9.27273H8.45455V8.18182H3.54545ZM14.4545 9.27273H18.426L19.3636 12.0682V15.2727H18.7331C18.4898 14.3351 17.6465 13.6364 16.6364 13.6364C15.6262 13.6364 14.7829 14.3351 14.5396 15.2727H14.4545V9.27273ZM4.09091 10.3636V11.4545H7.36364V10.3636H4.09091ZM7.90909 14.7273C8.51836 14.7273 9 15.2089 9 15.8182C9 16.4275 8.51836 16.9091 7.90909 16.9091C7.29982 16.9091 6.81818 16.4275 6.81818 15.8182C6.81818 15.2089 7.29982 14.7273 7.90909 14.7273ZM16.6364 14.7273C17.2456 14.7273 17.7273 15.2089 17.7273 15.8182C17.7273 16.4275 17.2456 16.9091 16.6364 16.9091C16.0271 16.9091 15.5455 16.4275 15.5455 15.8182C15.5455 15.2089 16.0271 14.7273 16.6364 14.7273Z" fill="#95A185"/>
                </svg><a class="headlink" href="about.php">Delivery for Alberta Area Only</a>
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18.99 10.2014C18.7207 9.92 18.4421 9.63 18.3371 9.375C18.24 9.14143 18.2343 8.75429 18.2286 8.37929C18.2179 7.68214 18.2064 6.89214 17.6571 6.34286C17.1079 5.79357 16.3179 5.78214 15.6207 5.77143C15.2457 5.76571 14.8586 5.76 14.625 5.66286C14.3707 5.55786 14.08 5.27929 13.7986 5.01C13.3057 4.53643 12.7457 4 12 4C11.2543 4 10.695 4.53643 10.2014 5.01C9.92 5.27929 9.63 5.55786 9.375 5.66286C9.14286 5.76 8.75429 5.76571 8.37929 5.77143C7.68214 5.78214 6.89214 5.79357 6.34286 6.34286C5.79357 6.89214 5.78571 7.68214 5.77143 8.37929C5.76571 8.75429 5.76 9.14143 5.66286 9.375C5.55786 9.62929 5.27929 9.92 5.01 10.2014C4.53643 10.6943 4 11.2543 4 12C4 12.7457 4.53643 13.305 5.01 13.7986C5.27929 14.08 5.55786 14.37 5.66286 14.625C5.76 14.8586 5.76571 15.2457 5.77143 15.6207C5.78214 16.3179 5.79357 17.1079 6.34286 17.6571C6.89214 18.2064 7.68214 18.2179 8.37929 18.2286C8.75429 18.2343 9.14143 18.24 9.375 18.3371C9.62929 18.4421 9.92 18.7207 10.2014 18.99C10.6943 19.4636 11.2543 20 12 20C12.7457 20 13.305 19.4636 13.7986 18.99C14.08 18.7207 14.37 18.4421 14.625 18.3371C14.8586 18.24 15.2457 18.2343 15.6207 18.2286C16.3179 18.2179 17.1079 18.2064 17.6571 17.6571C18.2064 17.1079 18.2179 16.3179 18.2286 15.6207C18.2343 15.2457 18.24 14.8586 18.3371 14.625C18.4421 14.3707 18.7207 14.08 18.99 13.7986C19.4636 13.3057 20 12.7457 20 12C20 11.2543 19.4636 10.695 18.99 10.2014ZM18.165 13.0079C17.8229 13.365 17.4686 13.7343 17.2807 14.1879C17.1007 14.6236 17.0929 15.1214 17.0857 15.6036C17.0786 16.1036 17.0707 16.6271 16.8486 16.8486C16.6264 17.07 16.1064 17.0786 15.6036 17.0857C15.1214 17.0929 14.6236 17.1007 14.1879 17.2807C13.7343 17.4686 13.365 17.8229 13.0079 18.165C12.6507 18.5071 12.2857 18.8571 12 18.8571C11.7143 18.8571 11.3464 18.5057 10.9921 18.165C10.6379 17.8243 10.2657 17.4686 9.81214 17.2807C9.37643 17.1007 8.87857 17.0929 8.39643 17.0857C7.89643 17.0786 7.37286 17.0707 7.15143 16.8486C6.93 16.6264 6.92143 16.1064 6.91429 15.6036C6.90714 15.1214 6.89929 14.6236 6.71929 14.1879C6.53143 13.7343 6.17714 13.365 5.835 13.0079C5.49286 12.6507 5.14286 12.2857 5.14286 12C5.14286 11.7143 5.49429 11.3464 5.835 10.9921C6.17571 10.6379 6.53143 10.2657 6.71929 9.81214C6.89929 9.37643 6.90714 8.87857 6.91429 8.39643C6.92143 7.89643 6.92929 7.37286 7.15143 7.15143C7.37357 6.93 7.89357 6.92143 8.39643 6.91429C8.87857 6.90714 9.37643 6.89929 9.81214 6.71929C10.2657 6.53143 10.635 6.17714 10.9921 5.835C11.3493 5.49286 11.7143 5.14286 12 5.14286C12.2857 5.14286 12.6536 5.49429 13.0079 5.835C13.3621 6.17571 13.7343 6.53143 14.1879 6.71929C14.6236 6.89929 15.1214 6.90714 15.6036 6.91429C16.1036 6.92143 16.6271 6.92929 16.8486 7.15143C17.07 7.37357 17.0786 7.89357 17.0857 8.39643C17.0929 8.87857 17.1007 9.37643 17.2807 9.81214C17.4686 10.2657 17.8229 10.635 18.165 10.9921C18.5071 11.3493 18.8571 11.7143 18.8571 12C18.8571 12.2857 18.5057 12.6536 18.165 13.0079ZM15.2614 9.88143C15.3146 9.9345 15.3567 9.99752 15.3855 10.0669C15.4142 10.1363 15.429 10.2106 15.429 10.2857C15.429 10.3608 15.4142 10.4352 15.3855 10.5045C15.3567 10.5739 15.3146 10.6369 15.2614 10.69L11.2614 14.69C11.2084 14.7431 11.1453 14.7853 11.076 14.814C11.0066 14.8428 10.9322 14.8576 10.8571 14.8576C10.782 14.8576 10.7077 14.8428 10.6383 14.814C10.5689 14.7853 10.5059 14.7431 10.4529 14.69L8.73857 12.9757C8.68548 12.9226 8.64337 12.8596 8.61463 12.7902C8.5859 12.7209 8.57111 12.6465 8.57111 12.5714C8.57111 12.4963 8.5859 12.422 8.61463 12.3526C8.64337 12.2833 8.68548 12.2202 8.73857 12.1671C8.84579 12.0599 8.99122 11.9997 9.14286 11.9997C9.21794 11.9997 9.29229 12.0145 9.36166 12.0432C9.43102 12.0719 9.49405 12.1141 9.54714 12.1671L10.8571 13.4779L14.4529 9.88143C14.5059 9.8283 14.5689 9.78615 14.6383 9.75739C14.7077 9.72864 14.782 9.71384 14.8571 9.71384C14.9322 9.71384 15.0066 9.72864 15.076 9.75739C15.1453 9.78615 15.2084 9.8283 15.2614 9.88143Z" fill="#95A185"/>
</svg>
                <a class="headlink" href="gallery.php">Real Christmas Tree</a>
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

<path d="M12 15.1525C12.6369 15.1525 13.2595 14.9637 13.7891 14.6098C14.3187 14.256 14.7315 13.753 14.9752 13.1646C15.2189 12.5761 15.2827 11.9286 15.1585 11.3039C15.0342 10.6793 14.7275 10.1055 14.2771 9.65508C13.8268 9.20471 13.2529 8.898 12.6283 8.77374C12.0036 8.64948 11.3561 8.71326 10.7676 8.957C10.1792 9.20074 9.67624 9.6135 9.32239 10.1431C8.96853 10.6727 8.77966 11.2953 8.77966 11.9322C8.77966 12.7863 9.11895 13.6054 9.72288 14.2093C10.3268 14.8133 11.1459 15.1525 12 15.1525ZM12 9.72881C12.4358 9.72881 12.8618 9.85804 13.2241 10.1002C13.5865 10.3423 13.8689 10.6864 14.0357 11.089C14.2024 11.4916 14.2461 11.9346 14.1611 12.3621C14.076 12.7895 13.8662 13.1821 13.558 13.4902C13.2499 13.7984 12.8573 14.0082 12.4299 14.0933C12.0024 14.1783 11.5594 14.1346 11.1568 13.9679C10.7542 13.8011 10.4101 13.5187 10.1679 13.1563C9.92584 12.794 9.79661 12.368 9.79661 11.9322C9.79661 11.3478 10.0288 10.7874 10.442 10.3742C10.8552 9.96096 11.4156 9.72881 12 9.72881ZM21.4915 6H2.50847C2.37362 6 2.24429 6.05357 2.14893 6.14893C2.05357 6.24429 2 6.37362 2 6.50847V17.3559C2 17.4908 2.05357 17.6201 2.14893 17.7155C2.24429 17.8108 2.37362 17.8644 2.50847 17.8644H21.4915C21.6264 17.8644 21.7557 17.8108 21.8511 17.7155C21.9464 17.6201 22 17.4908 22 17.3559V6.50847C22 6.37362 21.9464 6.24429 21.8511 6.14893C21.7557 6.05357 21.6264 6 21.4915 6ZM3.01695 10.3068C3.80647 10.0967 4.5265 9.68189 5.1042 9.1042C5.68189 8.52651 6.09674 7.80647 6.30678 7.01695H17.6932C17.9033 7.80647 18.3181 8.52651 18.8958 9.1042C19.4735 9.68189 20.1935 10.0967 20.9831 10.3068V13.5576C20.1935 13.7677 19.4735 14.1825 18.8958 14.7602C18.3181 15.3379 17.9033 16.0579 17.6932 16.8475H6.30678C6.09674 16.0579 5.68189 15.3379 5.1042 14.7602C4.5265 14.1825 3.80647 13.7677 3.01695 13.5576V10.3068ZM20.9831 9.24492C20.468 9.065 20.0003 8.77124 19.6145 8.38549C19.2288 7.99974 18.935 7.53195 18.7551 7.01695H20.9831V9.24492ZM5.24492 7.01695C5.065 7.53195 4.77124 7.99974 4.38549 8.38549C3.99974 8.77124 3.53195 9.065 3.01695 9.24492V7.01695H5.24492ZM3.01695 14.6195C3.53195 14.7994 3.99974 15.0932 4.38549 15.4789C4.77124 15.8647 5.065 16.3325 5.24492 16.8475H3.01695V14.6195ZM18.7551 16.8475C18.935 16.3325 19.2288 15.8647 19.6145 15.4789C20.0003 15.0932 20.468 14.7994 20.9831 14.6195V16.8475H18.7551Z" fill="#95A185"/>

                </svg><a class="headlink" href="index.php#product">Order Online</a>
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 5.11628C10.1743 5.11628 8.42342 5.84153 7.13247 7.13247C5.84153 8.42342 5.11628 10.1743 5.11628 12C5.11628 13.8257 5.84153 15.5766 7.13247 16.8675C8.42342 18.1585 10.1743 18.8837 12 18.8837C13.8257 18.8837 15.5766 18.1585 16.8675 16.8675C18.1585 15.5766 18.8837 13.8257 18.8837 12C18.8837 10.1743 18.1585 8.42342 16.8675 7.13247C15.5766 5.84153 13.8257 5.11628 12 5.11628ZM4 12C4 7.58177 7.58177 4 12 4C16.4182 4 20 7.58177 20 12C20 16.4182 16.4182 20 12 20C7.58177 20 4 16.4182 4 12ZM9.3187 14.6441C9.3624 14.5852 9.41729 14.5354 9.48022 14.4978C9.54316 14.4601 9.61291 14.4351 9.68548 14.4244C9.75806 14.4137 9.83203 14.4174 9.90317 14.4353C9.97431 14.4532 10.0412 14.485 10.1001 14.5287C10.6419 14.9306 11.296 15.1628 12 15.1628C12.704 15.1628 13.3581 14.9299 13.8999 14.5287C13.9586 14.4831 14.0258 14.4496 14.0976 14.4303C14.1694 14.4109 14.2443 14.4062 14.318 14.4162C14.3917 14.4262 14.4626 14.4509 14.5266 14.4887C14.5907 14.5266 14.6465 14.5768 14.6908 14.6365C14.7351 14.6962 14.7671 14.7641 14.7848 14.8364C14.8025 14.9086 14.8056 14.9836 14.7939 15.057C14.7822 15.1305 14.7559 15.2008 14.7166 15.264C14.6774 15.3271 14.6259 15.3818 14.5652 15.4247C13.8245 15.9785 12.9248 16.2782 12 16.2791C11.0752 16.2782 10.1755 15.9785 9.43479 15.4247C9.31589 15.3366 9.23686 15.2049 9.21509 15.0585C9.19332 14.9121 9.23059 14.763 9.3187 14.6441Z" fill="#95A185"/>
<path d="M14.9769 10.8839C14.9769 11.5 14.6435 12.0001 14.2327 12.0001C13.8219 12.0001 13.4886 11.5 13.4886 10.8839C13.4886 10.2677 13.8219 9.76758 14.2327 9.76758C14.6435 9.76758 14.9769 10.2677 14.9769 10.8839ZM10.5118 10.8839C10.5118 11.5 10.1784 12.0001 9.76762 12.0001C9.35683 12.0001 9.02344 11.5 9.02344 10.8839C9.02344 10.2677 9.35683 9.76758 9.76762 9.76758C10.1784 9.76758 10.5118 10.2677 10.5118 10.8839Z" fill="#95A185"/>
</svg>
<a class="headlink" href="index.php#review">6,000+ Happy Customers</a>
							</div>
            
        </div>
    </nav>
</header>
