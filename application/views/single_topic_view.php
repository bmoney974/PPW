<body>
<div class="container main_wrapper">
    <?php $this->load->view('templates/head_view'); ?><!-- nav -->

    <div class="row" >
        <div class="col-md-12">
            <h2>Learning Center</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12"><!-- bread crumbs -->
            <ol class="breadcrumb">
                <li><a href="#" class="active">Topics</a></li>
                <li><a href="#" class="active">Recording</a></li>

            </ol>
        </div><!-- bread crumbs end -->
    </div>

    <div class="row"><!-- genres -->
        <div class="col-md-12" style="margin-bottom: 30px;">
            <table width="600" align="center" cellpadding="10" cellspacing="0" border="0">
                <tr>
                    <td>
                        <table cellpadding="10" cellspacing="0" border="0" style="border:1px solid black; ;"><!-- video -->
                            <tr>
                                <td style="padding-left: 10px;">
                                    <img src="http://samplecutz.com/wp-content/uploads/2015/02/Screen-Shot-2015-02-22-at-10.18.51-PM.png" width="200" height="auto" />
                                </td>
                                <td width="20"></td>
                                <td>
                                    <table  cellpadding="10" cellspacing="0" border="0">
                                        <tr>
                                            <td>
                                              <h4>Getting Those Vocals Extra Crispy</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <p>In this video You will learn some solid a proven methods on how to record vocals. He goes over gain staging, miking and several other tips to help you get those vocals extra crispy.</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table><!-- video end -->
                    </td>
                </tr>
                <tr><td height="10"></td></tr>
                <tr>
                    <td>
                        <table cellpadding="10" cellspacing="0" border="0" style="border:1px solid black; ;"><!-- video -->
                            <tr>
                                <td style="padding: 10px;">
                                    <img src="http://samplecutz.com/wp-content/uploads/2015/02/Screen-Shot-2015-02-22-at-10.36.16-PM.png" width="200" height="auto" />
                                </td>
                                <td width="20"></td>
                                <td>
                                    <table  cellpadding="10" cellspacing="0" border="0">
                                        <tr>
                                            <td>
                                                <h4>Check Your Amplitude</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>In this video we discuss various techniques on miking guitar amps to get that perfect crunch. We will go over different mics and positions.</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table><!-- video end -->
                    </td>
                </tr>
            </table>
        </div>
    </div><!-- genres end -->


    <?php   $this->load->view('templates/footer'); ?><!-- footer -->
</div>