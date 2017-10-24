<?php
session_start();
if(isset($_SESSION['usernamefinance'])){
?>
<div id="wrap">
	<header>
		<div class="inner relative">
			<a class="logo" href="#"><img src="images/logo.gif" alt="fresh design web"></a>
			<a id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>
			<nav id="navigation">
				<ul id="main-menu">
					<li><a href="tb_report_list.php?pagesize=-1">Home</a></li>
					<li class="parent"><a href="#">Form</a>
						<ul class="sub-menu">
							<li>
								<a class="parent" href="#"><i class="icon-file-alt"></i> Karyawan</a>
								<ul class="sub-menu">
									<li><a href="tb_ta_add.php">Travel Allowance</a></li>
                                    <li><a href="tb_medical_add.php">Medical Claim</a></li>
                                    <li><a href="tb_tugas_add.php">Tugas</a></li>
                                    <li><a href="tb_meal_add.php">Meal Allowance</a></li>
                                    <li><a href="tb_sumbangan_add.php">Sumbangan</a></li>
								</ul>
							</li>
							<li><a href="tb_pihakketiga_add.php"><i class="icon-wrench"></i>Pihak Ketiga</a></li>
						</ul>
					</li>
					<li><a href="tb_nilaita_list.php">Tarif TA</a></li>
					<li class="parent"><a href="#">Report</a>
						<ul class="sub-menu">
                        <li><a href="tb_report_list.php?pagesize=-1"><i class="icon-wrench"></i>Karyawan</a></li>
							<li><a href="tb_reportpihak3_list.php?pagesize=-1"><i class="icon-gift"></i>Pihak Ketiga</a></li>
							<li>
								<a class="parent" href="#"><i class="icon-file-alt"></i> Detail</a>
								<ul class="sub-menu">
									<li><a href="tb_ta_list.php">Travel Allowance</a></li>
                                    <li><a href="tb_medical_list.php">Medical Claim</a></li>
                                    <li><a href="tb_tugas_list.php">Tugas</a></li>
                                    <li><a href="tb_meal_list.php">Meal Allowance</a></li>
                                    <li><a href="tb_sumbangan_list.php">Sumbangan</a></li>
									<li><a href="tb_pihakketiga_list.php">Pihak Ketiga</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="parent"><a href="#">Account</a>
					<ul class="sub-menu">
                        <li><a href="changepass.php"><i class="icon-wrench"></i>Change Password</a></li>
					</ul></li>	
					<li><a href="logout.php">Keluar</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div>
	</header>	
</div>    
<?php
}
else
{
header('Location: login.php');
}
?>