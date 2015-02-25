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

            </ol>
        </div><!-- bread crumbs end -->
    </div>

    <div class="row"><!-- genres -->
        <div class="col-md-12" style="margin-bottom: 30px;">
            <table width="600" align="center" cellpadding="10" cellspacing="0" border="0">
                <tr>
                    <td style="border:1px solid black; padding:10px;">
                        <a href="<?php echo base_url("home/topics") ?>">
                            Drum Programming
                        </a>
                    </td>
                </tr>
                <tr>
                    <td style="border:1px solid black; padding:10px;">
                        <a href="<?php echo base_url("home/topics") ?>">
                            Microphone Techniques
                        </a>
                    </td>
                </tr>
                <tr>
                    <td style="border:1px solid black; padding:10px;">
                        <a href="<?php echo base_url("home/topics") ?>">
                            Software Synths
                        </a>
                    </td>
                </tr>
                <tr>
                    <td style="border:1px solid black; padding:10px;">
                        <a href="<?php echo base_url("home/topics") ?>">
                            Mixing
                        </a>
                    </td>
                </tr>
                <tr>
                    <td style="border:1px solid black; padding:10px;">
                        <a href="<?php echo base_url("home/topics") ?>">
                            Recording
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div><!-- genres end -->


    <?php   $this->load->view('templates/footer'); ?><!-- footer -->
</div>