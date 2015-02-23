<body>
<div class="container main_wrapper">
    <?php $this->load->view('templates/head_view'); ?><!-- nav -->

    <div class="row" >
        <div class="col-md-12">
            <h2>Sound Library</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12"><!-- bread crumbs -->
            <ol class="breadcrumb">
                <li><a href="#" class="active">Genres</a></li>

            </ol>
        </div><!-- bread crumbs end -->
    </div>

    <div class="row"><!-- genres -->
        <div class="col-md-12" style="margin-bottom: 30px;">
             <table width="600" align="center" cellpadding="10" cellspacing="0" border="0">
                 <tr>
                     <td style="border:1px solid black; padding:10px;">
                        <a href="#">
                            Alternative
                        </a>
                     </td>
                 </tr>
                 <tr>
                     <td style="border:1px solid black; padding:10px;">
                         <a href="#">
                             Acoustic
                         </a>
                     </td>
                 </tr>
                 <tr>
                     <td style="border:1px solid black; padding:10px;">
                         <a href="#">
                             Drum n Bass
                         </a>
                     </td>
                 </tr>
                 <tr>
                     <td style="border:1px solid black; padding:10px;">
                         <a href="#">
                             Funk
                         </a>
                     </td>
                 </tr>
                 <tr>
                     <td style="border:1px solid black; padding:10px;">
                         <a href="#">
                             Hip Hop
                         </a>
                     </td>
                 </tr>
             </table>
        </div>
    </div><!-- genres end -->


    <?php   $this->load->view('templates/footer'); ?><!-- footer -->
</div>