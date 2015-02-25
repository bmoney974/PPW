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
                <li><a href="<?php echo base_url("home/learning") ?>" class="active">Topics</a></li>
                <li><a href="<?php echo base_url("home/topics") ?>" class="active">Recording</a></li>
                <li><a href="#" class="active">Getting Those Vocals Extra Crispy</a></li>

            </ol>
        </div><!-- bread crumbs end -->
    </div>

    <div class="row"><!-- genres -->
        <div class="col-md-12" style="margin-bottom: 30px;">
            <table width="600" align="center" cellpadding="10" cellspacing="0" border="0">
                <tr>
                    <td>
                        <table align="center" cellpadding="10" cellspacing="0" border="0" style="border:1px solid black; ;"><!-- video -->
                            <tr>
                                <td>
                                   <table align="center">
                                       <tr>
                                           <td style="padding-top: 20px;">
                                               <img src="http://samplecutz.com/wp-content/uploads/2015/02/Screen-Shot-2015-02-22-at-10.18.51-PM.png" width="550" height="auto" />
                                           </td>
                                       </tr>
                                   </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table  cellpadding="10" cellspacing="0" border="0" >
                                        <tr>
                                            <td style="padding:20px;">
                                                <h4>Getting Those Vocals Extra Crispy</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:20px;">
                                                <p>In this video You will learn some solid a proven methods on how to record vocals. He goes over gain staging, miking and several other tips to help you get those vocals extra crispy.</p>
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