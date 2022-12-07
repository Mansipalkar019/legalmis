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
   font-size: 12px;
   line-height: 24px;
   font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
   color: #555;
   height: 1150px;
   
   }
   .invoice-box table {
     max-width: 890px;
   margin: auto;
   width: 100%;
   line-height: inherit;
   text-align: left;
   margin-bottom: 33px !important;
   }
   .invoice-box table td {
   vertical-align:middle;
   font-size:14px;
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
<?php //echo "<pre>";print_r($data['termcond']);die();?>
<div class="container invoice-box img-responsive" style="background-image:url('<?php echo base_url() ?>assets_admin/images/letterhead.png'); 
   background-repeat: no-repeat;
   background-size: 1950px 2850px;">
   <table cellpadding="0" cellspacing="0" style="margin-top: 150px;">
      <tr>
         <td style="text-align:center;">
            <b> <?=$data['getsalesrecordbyid']['invoice_type_name']?> : <?php echo $data['getsalesrecordbyid']['invoice_number'];?> </b>  
         </td>
      </tr>
   </table>
   <table cellspacing="0px" cellpadding="3px" >
      <tr class="information" >
         <td  colspan="3" >
            <b> Invoice to: <br> <?php echo $data['getsalesrecordbyid']['invoice_name'];?> </b> <br>
            Company Address: <br>
            <?php echo $data['getsalesrecordbyid']['street'];?><br>
            <?php echo $data['getsalesrecordbyid']['city'];?>, <?php echo $data['getsalesrecordbyid']['state']['name'];?> <?php echo $data['getsalesrecordbyid']['pincode'];?> <br><br>
            Mobile No:-<?php echo $data['getsalesrecordbyid']['mobile_1'];?><?php if($data['getsalesrecordbyid']['mobile_2'] != '' && $data['getsalesrecordbyid']['mobile_2'] != 0){echo ', '.$data['getsalesrecordbyid']['mobile_2'];} ?><?php if($data['getsalesrecordbyid']['alternate_number'] != '' && $data['getsalesrecordbyid']['alternate_number'] != 0){echo ' / '.$data['getsalesrecordbyid']['alternate_number'];} ?> <br>
            Email ID:-<?php echo $data['getsalesrecordbyid']['email_address'];?><br>
            GSTIN:-<?php echo $data['getsalesrecordbyid']['gst_no'];?><br><br>
            Invoice Date:   <?php echo $data['getsalesrecordbyid']['sale_date'];?>
         </td>
         <td >
            <b> Pay to: <br>Primary bank details :</b><br>
            Bank Account No : 106603130001272<br>
            IFSC Code : SVCB0000066<br>
            Bank: SVC Co-Operative Bank Ltd<br><br>
            Branch: Vikhroli West<br>
            City : Mumbai<br><br>
            G-PAY - +91 84529 31503<br>
            PAYTM - +91 84529 31503<br>
         </td>
      
      </tr>
   </table>
   <table cellspacing="0px" cellpadding="2px" border=1>
      <tr class="heading">
         <td style="width:5%;text-align:center;">
            Sr. No.
         </td>
         <td style="width:65%; text-align:center;">
            Description.
         </td>
         <td style="width:20%; text-align:center;">
            Unit Price
         </td>
         <td style="width:5%; text-align:center;">
            Quantity 
         </td>
         <td style="width:5%; text-align:center;">
            Amount
         </td>
      </tr>
      <?php if($data['getsalesrecordbyid']['govt_fee'] != 0){ ?>
         <tr class="item">
         <td style="width:5%;text-align:center;">
            1
         </td>
         <td style="width:25%; text-align:center;">
            Govt Fees
         </td>
         <td style="width:10%; text-align:center;">
         <?php echo $data['getsalesrecordbyid']['govt_fee']; ?>
         </td>
         <td style="width:5%; text-align:center;">
            1
         </td>
         <td style="width:5%; text-align:center;">
         <?php echo $data['getsalesrecordbyid']['govt_fee']; ?>
         </td>
      </tr>
      <?php } ?>
      
      <tr class="item">
         <td style="width:5%;text-align:center;">
            2
         </td>
         <td style="width:25%; text-align:center;">
            Trademark Process (Drafting,Proceeding & Professional Fees)
         </td>
         <td style="width:10%; text-align:center;">
         <?php echo $data['getsalesrecordbyid']['total_professional_amount']; ?>
         </td>
         <td style="width:5%; text-align:center;">
            1
         </td>
         <td style="width:5%; text-align:center;">
         <?php echo $data['getsalesrecordbyid']['total_professional_amount']; ?>
         </td>
      </tr>
      <tr class="item">
         <td style="width:5%;text-align:center;">
            3
         </td>
         <td style="width:25%; text-align:center;">
            (HSN CODE:-0)
         </td>
         <td style="width:10%; text-align:center;">
            0
         </td>
         <td style="width:5%; text-align:center;">
         </td>
         <td style="width:5%; text-align:center;">
            0
         </td>
      </tr>
      <?php if($data['getsalesrecordbyid']['cgst'] != 0 && $data['getsalesrecordbyid']['sgst'] != 0){ ?>
         <tr class="item">
         <td style="width:5%;text-align:center;">
            4
         </td>
         <td style="width:25%; text-align:center;">
            CGST
         </td>
         <td style="width:10%; text-align:center;">
         <?php echo $data['getsalesrecordbyid']['cgst']; ?>
         </td>
         <td style="width:5%; text-align:center;">
            1
         </td>
         <td style="width:5%; text-align:center;">
         <?php echo $data['getsalesrecordbyid']['cgst']; ?>
         </td>
      </tr>
      <tr class="item">
         <td style="width:5%;text-align:center;">
            5
         </td>
         <td style="width:25%; text-align:center;">
            SGST
         </td>
         <td style="width:5%; text-align:center;">
         <?php echo $data['getsalesrecordbyid']['sgst']; ?>
         </td>
         <td style="width:5%; text-align:center;">
           1
         </td>
         <td style="width:5%; text-align:center;">
         <?php echo $data['getsalesrecordbyid']['sgst']; ?>
         </td>
      </tr>
      <?php } ?>
      <?php if($data['getsalesrecordbyid']['igst'] != 0 ){ ?>
      <tr class="item">
         <td style="width:5%;text-align:center;">
            4
         </td>
         <td style="width:25%; text-align:center;">
            IGST
         </td>
         <td style="width:10%; text-align:center;">
         <?php echo $data['getsalesrecordbyid']['igst']; ?>
         </td>
         <td style="width:5%; text-align:center;">
            1
         </td>
         <td style="width:5%; text-align:center;">
         <?php echo $data['getsalesrecordbyid']['igst']; ?>
         </td>
      </tr>
      <?php } ?>
      <!-- <tr class="item" style="margin-top:10px">
         <td style="width:10%;" colspan="3">
         </td>
         <td style="width:15%;text-align:center;background: #302875;color:white;font-weight: bold;font-size:12px;">
          Round off
         </td>
         <td style="width:15%; text-align:center;">
         <?php echo $data['getsalesrecordbyid']['round_off']; ?>
         </td>
      </tr>
      <tr class="item">
         <td style="width:10%;" colspan="3" class="">
         </td>
         <td style="width:15%; text-align:center;background: #302875;color:white;font-weight: bold;font-size:12px;">
          Grand Total
         </td>
         <td style="width:15%; text-align:center;">
         <?php echo round($data['getsalesrecordbyid']['govt_fee']+$data['getsalesrecordbyid']['total_professional_amount']+$data['getsalesrecordbyid']['cgst']+$data['getsalesrecordbyid']['sgst']+$data['getsalesrecordbyid']['igst']); ?>
         </td>
      </tr> -->
      </td>
      </tr>
   </table>
   <table cellspacing="0px" cellpadding="2px" border=0>
       <tr class="item" style="margin-top:7px;">
         <td style="width:10%;" colspan="3" >
         </td>
         <td style="width:15%;text-align:center;background: #302875;color:white;font-weight: bold;font-size:12px;border:1px solid">
          Round off
         </td>
         <td style="width:15%; text-align:center;border:1px solid">
         <?php echo $data['getsalesrecordbyid']['round_off']; ?>
         </td>
      </tr>
      <tr class="item">
         <td style="width:10%;" colspan="3" class="">
         </td>
         <td style="width:15%; text-align:center;background: #302875;color:white;font-weight: bold;font-size:12px;border:1px solid">
          Grand Total
         </td>
         <td style="width:15%; text-align:center;border:1px solid">
         <?php $totals=$data['getsalesrecordbyid']['govt_fee']+$data['getsalesrecordbyid']['total_professional_amount']+$data['getsalesrecordbyid']['cgst']+$data['getsalesrecordbyid']['sgst']+$data['getsalesrecordbyid']['igst'];
         echo (int)$totals;
         ?>
         </td>
      </tr>
   </table>
   <table cellspacing="0px" cellpadding="2px">
      <tr class="information">
         <td  colspan="3">
            <b>Secondary Bank details :</b> <br>
            Payee Name: BDS Services Pvt Ltd <br>
            Bank Account No : 9313790257<br>
            IFSC : KKBK0001429<br>
            Bank : KOTAK MAHINDRA BANK LTD<br>
         </td>
         <td>
            Branch : Vikhroli (W)
         </td>
         <td>
            City : Mumbai
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
           <?php 
           foreach($data['termcond'] as $term_key => $term_row)
           { ?>
            <b>Terms & conditions apply – <?php echo $term_row['name'];?></b> <br>
            <p><?php echo $term_row['terms'];?><br></p> 
           <?php } ?>
           
         </td>
      </tr>
   </table>
   
</div>
