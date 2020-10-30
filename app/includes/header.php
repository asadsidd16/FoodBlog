<header>
        <a href="<?php echo BASE_URL . '/index.php'?>" class="logo">
            <h1 class="logo-text"><span>Food</span>Wars <i class="fas fa-drumstick-bite"></i></h1>
        </a>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><a href="<?php echo BASE_URL . '/index.php'?>" > Home </a></li>
            <li><a href="registration.php" > Sign Up </a></li>
            <li><a href="login.php" > Login </a></li>

            <?php if(isset($_SESSION['id'])): ?>
            <li>
                <a href="#" >
                    <i class="fa fa-user"></i>
                        <?php echo $_SESSION['username'] ?>
                    <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                </a>
                <ul>
                    <li><a href="#" > Dashboard </a></li>
                    <li><a href="#" class="logout"> Logout </a></li>
                </ul>
            </li>
            <?php else: ?>
             <li><a href="registration.php" > Sign Up </a></li>
             <li><a href="login.php" > Login </a></li>
            <?php endif; ?>
           
        </ul>
    </header>