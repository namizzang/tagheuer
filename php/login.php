<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css"/>
    <link rel="stylesheet" href="../css/reset.css"/>
    <title>TAG_LOG</title>
    <style>
        video{width:100%;}

        /* ######### header ######## */
        #header{width:100%; position:fixed; left:0; top:0; z-index:9999;}
        #header:after{content:''; display:block; clear:both;}

        #headerInfo{width:100%; height:24px; line-height:24px; border-bottom:1px solid #333; background-color:#000;}
        #headerInfo ul{width:50%; box-sizing:border-box; font-size:10px; float:left;}
        #headerInfo .l_info{text-align:left; padding-left:8px;}
        #headerInfo .l_info li{padding-right:12px;}
        #headerInfo .l_info .cont{width:80px;}
        #headerInfo .l_info .cont select{border:none; background-color:#000; color:#fff;}
        #headerInfo .r_info{text-align:right; padding-right:8px;}
        #headerInfo .r_info li{padding-left:12px;}
        #headerInfo li{display:inline;}
        #headerInfo li a{color:#fff;}
        

        #nav{width:100%; height:70px; background-color:#000;}
        #nav .inner{position:relative;}
        #nav h1{width:40px; padding-left:8px; position:absolute; left:0; top:50%; transform:translateY(-50%);}
        #nav h1 a{display:block; width:100%; height:100%;}
        #nav h1 img{width:100%;}
        #nav ul{width:1220px; height:100%; line-height:70px; padding-left:60px; float:left;}
        #nav li{display:inline; font-size:12px; color:#fff; padding:0 24px;}
        #nav li a{color:#fff; font-weight:600;}

        #productInfo{width:100%; height:44px; line-height:44px; background-color:#efefef; display:none;}
        #productInfo .inner{position:relative;}
        #productInfo .inner:after{content:''; display:block; clear:both;}
        #productInfo .inner div{float:left;}
        #productInfo .img{width:60px; padding:0 8px; box-sizing:border-box;}
        #productInfo .img img{width:100%;}
        #productInfo .info p{font-size:12px; font-weight:600; padding-right:18px; float:left;}
        #productInfo .cart{width:140px; height:30px; line-height:28px; border:1px solid #000; box-sizing:border-box; text-align:center;  font-size:12px; position:absolute; right:0; top:50%; transform:translateY(-50%);}
        #productInfo .cart a{display:block; width:100%; height:100%; color:#fff; background-color:#000; font-size:10px; transition:.3s ease all;}
        #productInfo .cart a:hover{background-color:#efefef; color:#000;}
        
        #login{width:100%; height:70vh; position:relative;}

        #loginArea{width:20rem; position:absolute; left:50%; top:50%; transform:translate(-50%,-50%);}

        #loginArea .log_tit{width:100%; text-align:center; padding-bottom:20px;}
        #loginArea .log_tit h2{font-size:1.2rem; padding-bottom:10px;}
        #loginArea .log_tit h3{font-size:.8rem; padding-bottom:10px; color:#aaa;}

        #loginArea form{width:100%; padding-bottom:10px;}
        #loginArea form p{padding-bottom:10px;}
        #loginArea form p label{display:block; font-size:.8rem; padding-bottom:8px; font-weight:600;}
        #loginArea form p input{width:100%; padding:8px 4px; border-radius:6px; font-size:1rem; border:1px solid #000; box-sizing:border-box;}
        #loginArea form p input[title="submit"]{width:100%; background-color:#000; color:#fff;}

        #loginArea .btn{width:100%; text-align:center;}
        #loginArea .btn a{background-color:#fff; font-size:14px; font-weight:600;}
        #loginArea .btn a:first-child{margin-right:10px;}
        
    </style>
</head>

<body>
    <div id="wrap">
        <header id="header">
            <div id="headerInfo">
                <ul class="l_info">
                <li class="cont">
                    <select id="cont" title="Europe">
                        <option value="South_Korea||English">South Korea||English</option>
                        <option value="Albania">Albania</option>
                        <option value="Austria">Austria</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Schweiz/Suisse/Svizzera">Schweiz/Suisse/Svizzera</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Germany">Germany</option>
                        <option value="Denmark">Denmark</option>
                    </select>
                </li>
                <li>
                    <a href="#" title="Accessibility">
                        Accessibility
                    </a>
                </li>
                <li>
                    <a href="#" title="Find a TAG Heuer store">
                        Find a TAG Heuer store
                    </a>
                </li>
                </ul>
                <ul class="r_info">
                <li>
                    <a href="#"title="Services">
                        Services
                    </a>
                </li>
                <li>
                    <a href="#" title="Accessibility">
                        Contact
                    </a>
                </li>
                <li>
                    <a href="#" title="us +41 (0) 800 005 858">
                        us +41 (0) 800 005 858
                    </a>
                </li>
                </ul>
            </div>
            <nav id="nav">
                <div class="inner">
                <h1>
                    <a href="../index.html" title="TagHeuer">
                        <img src="../img/logo.SVG" alt="TagHeuer"/>
                    </a>
                </h1>
                <ul class="gnb">
                    <li>
                        <a href="#" title="TIMEPIECES">TIMEPIECES</a>
                    </li>
                    <li>
                        <a href="#" title="SMARTWATCHES">SMARTWATCHES</a>
                    </li>
                    <li>
                        <a href="#" title="TAG_HEUER_UNIVERSE">TAG HEUER UNIVERSE</a>
                    </li>
                </ul>
                <!-- gnb -->
                </div>
                <div id="productInfo">
                <div class="inner">
                    <div class="img">
                        <a href="#" title="TAG HEUER CONNECTED">
                            <img src="img/sub2/thumbnail3.png" alt="TAG HEUER CONNECTED"/>
                        </a>
                    </div>
                    <div class="info">
                        <p>TAG HEUER CONNECTED</p>
                        <p>₩ 2.710.000</p>
                    </div>
                    <div class="cart">
                        <a href="#" title="ADD_CART">ADD CART</a>
                    </div>
                </div>
                </div>
                <!-- productInfo -->
            </nav>
            <!-- header -->
        </header>
        <!-- headerWrap -->

        <section id="login">
            <div id="loginArea">
                <div class="log_tit">
                    <h2>LOGIN TO YOUR ACCOUNT</h2>
                    <h3>Please enter your informations to access your account</h3>
                </div>
                <form action="login_control.php" method="POST">
                    <fieldset>
                        <legend>LOGIN</legend>
                        <p><label for="userid">Email Address *</label><input type="text" id="userid" name="userid" maxlength="30" placeholder="Ex.: example@tagheuer.com" title="userid" required/></p>
                        <p><label for="userpw">Password *</label><input type="password" id="userpw" name="userpw" maxlength="20" placeholder="Your Password" title="userpw" required/></p>
                        <p><input type="submit" value="LOGIN" title="submit"></p>
                    </fieldset>
                </form>
                <div class="btn">
                    <a type="button" href="forgotten">Forgotten Password?</a>
                    <a type="button" href="join.php">JOIN MEMBERS</a>
                </div>
            </div>
        </section>

        <div id="footer">
            <div class="inner">

                <div class="f_follow">
                    <h3>FOLLOW US</h3>
                    <ul>
                        <li><a href="#" title="Facebook">Facebook</a></li>
                        <li><a href="#" title="Instagram">Instagram</a></li>
                        <li><a href="#" title="LinkedIn">LinkedIn</a></li>
                        <li><a href="#" title="Pinterest">Pinterest</a></li>
                        <li><a href="#" title="Youtube">Youtube</a></li>
                        <li><a href="#" title="Twitter">Twitter</a></li>
                        <li><a href="#" title="Weibo">Weibo</a></li>
                        <li><a href="#" title="WeChat">WeChat</a></li>
                        <li><a href="#" title="Line">Line</a></li>
                    </ul>
                </div>
                <div class="f_collection">
                    <h3>COLLECTIONS</h3>
                    <ul>
                        <li><a href="#" title="TAG_Heuer_Connected">TAG Heuer Connected</a></li>
                        <li><a href="#" title="TAG_Heuer_Carrera">TAG Heuer Carrera</a></li>
                        <li><a href="#" title="TAG_Heuer_Formula_1">TAG Heuer Formula 1</a></li>
                        <li><a href="#" title="TAG_Heuer_Aquaracer">TAG Heuer Aquaracer</a></li>
                        <li><a href="#" title="TAG_Heuer_Monaco">TAG Heuer Monaco</a></li>
                        <li><a href="#" title="TAG_Heuer_Autavia">TAG Heuer Autavia</a></li>
                        <li><a href="#" title="TAG_Heuer_Link">TAG Heuer Link</a></li>
                    </ul>
                </div>
                <div class="f_maison">
                    <h3>MAISON</h3>
                    <ul>
                        <li><a href="#" title="Our_Company">Our Company</a></li>
                        <li><a href="#" title="Our_Story">Our Story</a></li>
                        <li><a href="#" title="Savoir-Faire">Savoir-Faire</a></li>
                        <li><a href="#" title="Press_Corner">Press Corner</a></li>
                        <li><a href="#" title="Professional_Timing ">Professional Timing </a></li>
                        <li><a href="#" title="Career">Career</a></li>
                        <li><a href="#" title="Site_map">Site map</a></li>
                    </ul>
                </div>
                <div class="f_support">
                    <h3>SUPPORT</h3>
                    <ul>
                        <li><a href="#" title="Contact_Us">Contact Us</a></li>
                        <li><a href="#" title="FAQ">FAQ</a></li>
                        <li><a href="#" title="Customer_Care">Customer Care</a></li>
                        <li><a href="#" title="Warranty">Warranty</a></li>
                        <li><a href="#" title="Shipping">Shipping</a></li>
                        <li><a href="#" title="Returns">Returns</a></li>
                        <li><a href="#" title="Buying_on_TAGHeuer.com">Buying on TAGHeuer.com</a></li>
                        <li><a href="#" title="PRIVACY_N_TERMS">PRIVACY &amp; TERMS</a></li>
                    </ul>
                </div>
                <div class="f_terms">
                    <h3>PRIVACY &amp; TERMS</h3>
                    <ul>
                        <li><a href="#" title="Terms & Conditions">Terms &amp; Conditions</a></li>
                        <li><a href="#" title="Privacy_Policy">Privacy_Policy</a></li>
                        <li><a href="#" title="Cookies_Settings">Cookies Settings</a></li>
                        <li><a href="#" title="Press_Corner">Press Corner</a></li>
                        <li><a href="#" title="Professional_Timing ">Professional Timing </a></li>
                        <li><a href="#" title="Terms_of_Use">Terms of Use</a></li>
                        <li><a href="#" title="Human_Rights_Policy">Human Rights Policy</a></li>
                        <li><a href="#" title="Supply_Chain_Policies">Supply Chain Policies</a></li>
                        <li><a href="#" title="Legal_Notice">Legal Notice</a></li>
                        <li><a href="#" title="Accessibility_Statement">Accessibility Statement</a></li>
                    </ul>
                </div>
            </div>
            <address class="copy">
                <strong>&copy;wiwi154@naver.com</strong>
            </address>
        </div>
        <!-- footer -->
    </div>
</body>

</html>