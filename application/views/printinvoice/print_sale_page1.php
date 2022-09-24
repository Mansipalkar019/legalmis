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
<<<<<<< HEAD
=======
     max-width: 890px;
   margin: auto;
>>>>>>> e8161a5ddd39427a11984582747659a5a2823840
   width: 100%;
   line-height: inherit;
   text-align: left;
   margin-bottom: 33px !important;
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
   padding-bottom: 0px;
   border:none;
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

<div class="container invoice-box img-responsive" style="background-image:url('<?php echo base_url() ?>assets_admin/images/letterhead.png'); 
   background-repeat: no-repeat;
   background-size: 1950px 2850px;">
   
   <table cellpadding="0" cellspacing="0" style="margin-top: 150px;">
      <tr class="">
         <td colspan="12" class="text-center">
            <b> Proforma Invoice : <?php echo $data['invoice_number'];?> </b>  
         </td>
      </tr>
   </table>
   <table cellspacing="0px" cellpadding="2px">
      <tr class="information">
         <td  colspan="3">
            <b> Invoice to: <br> <?php echo $data['client_name'];?> </b> <br>
            Company Address: <br>
            <?php echo $data['street'];?><br>
            <?php echo $data['city'];?>, <?php echo $data['state'];?> <?php echo $data['pincode'];?> <br><br>
            Mobile No:-<?php echo $data['mobile_1'];?>, <?php if($data['mobile_2'] != ''){echo $data['mobile_2'];} ?>, <?php if($data['alternate_number'] != ''){echo $data['alternate_number'];} ?> <br>
            Email ID:-<?php echo $data['email_address'];?><br>
            GSTIN:-<?php echo $data['gst_no'];?><br><br>
            Invoice Date:   <?php echo $data['sale_date'];?>
         </td>
         <td>
            <b> Pay to: <br>Primary bank details :</b><br>
            Bank Account No : 106603130001272<br>
            IFSC Code : SVCB0000066<br>
            Bank: SVC Co-Operative Bank Ltd<br>
            Branch: Vikhroli West<br>
            City : Mumbai<br><br>
            G-PAY - +91 84529 31503<br>
            PAYTM - +91 84529 31503<br>
         </td>
      
      </tr>
   </table>
   <table cellspacing="0px" cellpadding="2px">
      <tr class="heading">
         <td style="width:15%;text-align:center;">
            Sr. No.
         </td>
         <td style="width:10%; text-align:center;">
            Description.
         </td>
         <td style="width:10%; text-align:center;">
            Unit Price
         </td>
         <td style="width:15%; text-align:center;">
            Quantity 
         </td>
         <td style="width:15%; text-align:center;">
            Amount
         </td>
      </tr>
      <tr class="item">
         <td style="width:10%;">
            1
         </td>
         <td style="width:25%; text-align:center;">
            Trademark Process (Drafting,Proceeding & Professional Fees)
         </td>
         <td style="width:10%; text-align:center;">
            10800
         </td>
         <td style="width:15%; text-align:center;">
            1
         </td>
         <td style="width:15%; text-align:center;">
            10800
         </td>
      </tr>
      <tr class="item">
         <td style="width:10%;">
            2
         </td>
         <td style="width:25%; text-align:center;">
            (HSN CODE:-998213)
         </td>
         <td style="width:10%; text-align:right;">
            0
         </td>
         <td style="width:15%; text-align:right;">
         </td>
         <td style="width:15%; text-align:right;">
            0
         </td>
      </tr>
      <tr class="item">
         <td style="width:10%; text-align:right;" colspan="3">
         </td>
         <td style="width:15%; text-align:right;">
            Grand Total
         </td>
         <td style="width:15%; text-align:right;">
            10800
         </td>
      </tr>
      </td>
      </tr>
   </table>

</div>

<div class="container invoice-box img-responsive" style="background-image:url('<?php echo base_url() ?>assets_admin/images/letterhead.png'); 
   background-repeat: no-repeat; 
   background-size: 1950px 2850px;">
   <table cellpadding="0" cellspacing="0" style="margin-top: 200px;border:none !important">
      <tr class="information" style="border:none;">
         <td colspan="3">
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
</div>
