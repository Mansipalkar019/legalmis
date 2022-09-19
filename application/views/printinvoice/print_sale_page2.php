<?php
   defined('BASEPATH') or exit('No direct script access allowed');
   // $CI = &get_instance();
   ?>
<style>
      .chosen-container-single .chosen-single {
    background: 0 0 !important;
    box-shadow: none !important;
    border-radius: 4px;
    height: 3.5rem !important;
}
#services_chosen{
   width:100% !important;
   height:30px !important;
}
   </style>
<?php  $this->load->view('header')?>

<style>
    .top_rw{ background-color:#f4f4f4; }
	.td_w{ }
	button{ padding:5px 10px; font-size:14px;}
    .invoice-box {
        max-width: 890px;
        margin: auto;
        padding:10px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 14px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
        height: 1150px;
    }
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
      margin-bottom: 53px !important;
    }
    .invoice-box table td {
       
        vertical-align:middle;
    }
    .invoice-box table tr td:nth-child(2) {
        /* text-align: right; */
    }
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    .invoice-box table tr.heading td {
        background: #302875;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
		font-size:12px;
        color:white;
        text-align:center;
    }
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    .rtl table {
        text-align: right;
    }
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
</style>

<div class="invoice-box img-responsive" style="background-image:url('<?php echo base_url() ?>assets_admin/images/letterhead.png'); 
  background-repeat: no-repeat;
  background-size: cover;">
        <table cellpadding="0" cellspacing="0" style="margin-top: 150px;border:none !important">
            <tr class="information" style="border:none;">
                  <td colspan="3">
                    <table>
                        <tr>
                            <td colspan="2">
							<b>Terms & conditions apply – TM Registration</b> <br>
                            1) Fees decided to be paid in advance shall not be refundable after 24hours. <br>
                            2) No charges applicable for Search Report<br>
							3) Trademark registration, acceptability depends wholly on the authority of the government authorities, and BDS Legal<br>Services cannot take any responsibility nor liability for the same.<br>
                            4) Once the application has been made, the TM receipt will be shared with you within an expected period of 7-15 working days. <br>
                            5) While applying for a Trademark, the government may if it thinks fit raise an objection or a query towards your application,<br>
                               on the grounds of it being similar to another Trademark already registered. Any Objections received towards the said<br>
                               application shall involve an extra service on the part of the BDS Legal Team to prepare a defence for the application to be<br>
                               accepted and will entail a court proceeding, which will be chargeable at an extra cost of Rs.2000/- <br>
                            6) Opposition will also attract an extra charge of Rs. 2700/- as government fees and Rs. 5000/- as our professional fees, for two court hearings.<br>
                            7) This Trademark application will come with a complimentary online certificate. <br>
                            8) R certificate is an additional service provided at BDS Legal Services, for an additional charge of Rs. 1000/-
                            </td>
                            
                        </tr>
                    </table>
                </td>
            </tr>
            <td colspan="3" >
            <table cellspacing="0px" cellpadding="2px">
           
            </table>
            </td>
			
           
        </table>
    </div>

   
</div>
<?php  $this->load->view('footer'); ?>
