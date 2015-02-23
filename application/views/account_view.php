<body>
<div class="container main_wrapper ">
    <?php $this->load->view('templates/head_view'); ?><!-- nav -->

    <div class="row">
        <div class="col-md-12">
            <h2>My Account</h2>
        </div>
    </div>

    <div class="row" >
        <div class="col-md-12">
            <table align="left" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td>
                        <table align="center" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td>
                                    <b>Hi Eric</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="http://samplecutz.com/wp-content/uploads/2015/02/Eric-Lanser.png" width="100" height="auto" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        Upload photo
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td width="30"></td>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    Standard Membership
                                </td>
                            </tr>
                            <tr><td height="20"></td></tr>
                            <tr>
                                <td>
                                <button>Upgrade</button>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row" style="margin-bottom: 20px;">
        <div class="col-md-12">
            <table align="right" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td>
                    <button>Log Out</button>
                    </td>
                </tr>
                <tr>
                    <td>
                    <a href="#">
                        Logout
                    </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>

  <?php   $this->load->view('templates/footer'); ?><!-- footer -->
</div>