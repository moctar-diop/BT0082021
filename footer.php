<style>


.footer {  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-auto-columns: 1fr;
  grid-auto-rows: 1fr;
  gap: 0px 0px;
  grid-auto-flow: row;
}

.aa { grid-area: 1 / 1 / 2 / 2; }

.bb { grid-area: 1 / 2 / 2 / 3; }

.cc { grid-area: 1 / 3 / 2 / 4; }

.dd { grid-area: 1 / 4 / 2 / 5; }

.main{

	bottom: 0;
	width: 100%;
}
ul{
	list-style: none;
}
.footer{
	background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
 h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
 h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
ul li:not(:last-child){
	margin-bottom: 10px;
}
ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.cc ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.cc .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.cc .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}
/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}

</style>
 <main class="main">
  	 <div class="footer">
  	 		<div class="aa">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="bb">
  	 			<h4>
				   
<?php echo date('Y'); ?> - Tous droits reservés 
                </h4>
  	 			<ul>
				   <li><a href="#">By Moctar Diop</a></li>
  	 				<li><a href="#">& Amadou Thiaw</a></li>
  	 				
  	 				
  	 			</ul>
  	 		</div>
  	 		<div class="cc">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				
  	 				<a href="twitter.com"><img src="img/twitter.svg"></i></a>
  	 				<a href="https://instagram.com"><img src="img/instagram.svg"></i></a>
  	 			
  	 			</div>
  	 		
  	 	</div>
	 

    
</footer>
 </main>

      

            

   
               
        </footer>
    </body>
</html>


-------------------------------------------------------------------------------------------------------------------

<!-- <style>
   
.ctner{
	max-width: 1170px;
	margin:auto;
}
.ctner .row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{
	background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}

</style>
  <footer class="footer">
  	 <div class="ctner">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>
				   
<?php echo date('Y'); ?> - Tous droits reservés 
                </h4>
  	 			<ul>
				   <li><a href="#">By Moctar Diop</a></li>
  	 				<li><a href="#">& Amadou Thiaw</a></li>
  	 				
  	 				
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				
  	 				<a href="twitter.com"><img src="img/twitter.svg"></i></a>
  	 				<a href="https://instagram.com"><img src="img/instagram.svg"></i></a>
  	 			
  	 			</div>
  	 		</div>
			   <div class="footer-col">
			   <li><a href="<?= RACINE_SITE;?>logout.php"><input type="button" value="Log out" ></a></li>
  	 				<li><a href="<?= RACINE_SITE;?>resetPassword.php"><input type="button" value="ChangerMotDePasse" ></a></li>
			   </div>
  	 	</div>
  	 </div>
	 

    
</footer>

      

            

   
               
        </footer>
    </body>
</html> -->