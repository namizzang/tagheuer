<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/reset.css"/>
    <title>Document</title>
    <style>
        input{border-bottom:1px solid #000; background-color:rgba(0,0,0,0);}
        input:focus{outline:2px dotted #000;}

        #joinArea{width:100%; position:relative;}

        #joinArea .join{width:40rem; margin:0 auto;}

        #joinArea .create_tit{width:100%; text-align:center; padding-bottom:20px;}
        #joinArea .create_tit h2{font-size:1.2rem; padding-bottom:10px;}
        #joinArea .create_tit h3{font-size:.8rem;}

        #joinArea form{width:100%;}
        #joinArea form fieldset{border:0;}
        #joinArea .row{width:100%; display:flex; padding-bottom:20px;}
        #joinArea .row .colum{width:50%; box-sizing:border-box;}
        #joinArea .row .colum:first-child{padding-right:20px; margin-right:10px;}

        #joinArea .row label{display:block; width:100%; font-size:.8rem; font-weight:600; padding-bottom:4px;}
        #joinArea .row label span{font-size:.6rem; color:#aaa;}
        #joinArea .row select{width:100%; border:none; padding:10px 0; background-color:rgba(0,0,0,0); border-bottom:1px solid #000;}
        #joinArea .row select:focus{outline:dotted;}
        #joinArea .row input{width:100%; padding:10px 8px;}
        #joinArea .row.btn_area input{border:none; background-color:#000; color:#fff; padding:20px 10px; font-size:.8rem;}
    </style>
</head>
<body>
    <div id="wrap">
        <div id="header"></div>

        <section id="joinArea">
            <div class="join">
                <div class="create_tit">
                    <h2>CREATE YOUR ACCOUNT</h2>
                    <h3>Create your TAG Heuer ID</h3>
                </div>
                <form action="joinup_control.php" method="POST">
                    <fieldset>
                        <div class="row">
                            <div class="colum">
                                <label for="title">Title</label>
                                <select name="title" id="title">
                                    <option value="Select">Select</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Ms">Ms</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="colum">
                                <label for="first_name">First name* <span>Your first name</span></label>
                                <input type="text" name="first_name" id="first_name" required/>
                            </div>
                            <div class="colum">
                                <label for="Surname">Surname* <span>Your last name</span></label>
                                <input type="text" name="surname" id="surname" maxlength="30" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="colum">
                                <label for="email">E-mail * Ex.: <span>example@tagheuer.com</span></label>
                                <input type="email" name="email" id="email" required/>
                            </div>
                            <div class="colum">
                                <label for="reEmail">Confirm your email address *Ex.: <span>example@tagheuer.com</span></label>
                                <input type="email" name="reEmail" id="reEmail" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="colum">
                                <label for="password">Password * <span>Your password</span></label>
                                <input type="password" name="password" id="password" maxlength="100" required/>
                            </div>
                            <div class="colum">
                                <label for="password">Confirm your Password</label>
                                <input type="password" name="password" id="password" maxlength="100" required/>
                            </div>
                        </div>
                        <div class="btn_area row">
                            <div class="colum">
                                <input type="button" title="HOME" href="../index.html" value="HOME"/>
                            </div>
                            <div class="colum">
                                <input type="submit" title="submit" value="Create your My TAG Heuer account"/>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>

        <div id="footer"></div>
    </div>
</body>
</html>