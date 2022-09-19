<?php
defined('BASEPATH') or exit('No direct script access allowed');
// $CI = &get_instance();
?>

<main class="container-fluid">
    <div class="bg-light p-2 rounded"></div>

    <div class="row pb-4">
        <div class="col">

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Row Id:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['id'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Sale Date:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= date('d / M / Y', strtotime($sales['sale_date'])) ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Deal Id:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['deal_id'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Invoice number:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['invoice_number'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Primary Caller:</div>
                <div class="card-body">
                    <?php $primary_caller = $this->db->query("SELECT username from users where user_id='{$sales['primary_caller']}'")->row(); ?>
                    <p class="card-text text-monospace"><?= $primary_caller->username ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Secondary Caller:</div>
                <div class="card-body">
                    <?php $secondary_caller = $this->db->query("SELECT username from users where user_id='{$sales['secondary_caller']}'")->row(); ?>
                    <p class="card-text text-monospace"><?= $secondary_caller->username ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Lead Source:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['lead_source'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Remarks:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['remarks'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Services:</div>
                <div class="card-body">
                    <?php
                    $services = $this->db->query("SELECT distinct ss.sales_id,s.* from sales_services ss join services s on ss.services_id=s.id where ss.sales_id='{$sales['id']}'")->result();

                    $append_services = "";
                    foreach ($services as $row) {
                        $append_services .= "<a href='" . site_url('sales/services-info?sales_id=' . $row->sales_id . '&services_id=' . $row->id) . "'>{$row->name}</a>, ";
                    }
                    $append_services = rtrim($append_services, ', ');
                    ?>
                    <p class="card-text text-monospace"><?= $append_services ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Sub Services:</div>
                <div class="card-body">
                    <?php
                    $services = $this->db->query("SELECT distinct ss.sales_id,sss.*,s.name from sales_services ss join sales_sub_services sss on ss.sales_id=sss.sales_id join sub_services s on sss.sub_services_id=s.id where ss.sales_id='{$sales['id']}'")->result();

                    $append_services = "";
                    foreach ($services as $row) {
                        $append_services .= "<a href='" . site_url('sales/sub-services-info?sales_id=' . $row->sales_id . '&sub_services_id=' . $row->sub_services_id.'&services_id='.$row->services_id) . "'>{$row->name}</a>, ";
                    }
                    $append_services = rtrim($append_services, ', ');
                    ?>
                    <p class="card-text text-monospace"><?= $append_services ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Company Name:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['company_name'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Brand Name:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['brand_name'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Class Name:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['class_name'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Document List:</div>
                <div class="card-body">
                    <p class="card-text text-monospace">doc list here...</p>
                </div>
            </div>

        </div>

        <div class="col">

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Client Name:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['client_name'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Mobile 1:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['mobile_1'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Mobile 2:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['mobile_2'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Alternate Number:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['alternate_number'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Email Id:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['email_address'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">GST No.:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['gst_no'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Street:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['street'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">City:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['city'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">State:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['state'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Pincode:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['pincode'] ?></p>
                </div>
            </div>

        </div>

        <div class="col">

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Deal amount:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['deal_amount'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Amount received:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['amount_received'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Outstanding:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['outstanding'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">TCS:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['tcs'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Govt fees:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['govt_fees'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Associate fees:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['associate_fees'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Net income:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['net_income'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Gst amount:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['gst_amount'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Outstanding followup date:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= date('d / M / Y', strtotime($sales['outstanding_followup_date'])) ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Payment mode:</div>
                <div class="card-body">
                    <?php $payment_mode = $this->db->query("SELECT name from payment_mode where id='{$sales['payment_mode']}'")->row(); ?>
                    <p class="card-text text-monospace"><?= $payment_mode->name ?></p>
                </div>
            </div>

        </div>

        <div class="col">

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Govt Fee:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['govt_fee'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Professional Fees:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['professional_fees'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Drafting/ Proceeding Fees:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['drafting_proceeding_fees'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Drafting/ Proceeding/ Professional Fees:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['drafting_proceeding_professional_fees'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Total Professional Amount:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['total_professional_amount'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">CGST 9%:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['cgst'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">SGST 9%:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['sgst'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">IGST 18%:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['igst'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Round Off:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['round_off'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Invoice Name:</div>
                <div class="card-body">
                    <p class="card-text text-monospace"><?= $sales['invoice_name'] ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Invoice status:</div>
                <div class="card-body">
                    <?php $invoice_status = $this->db->query("SELECT name from invoice_status where id='{$sales['invoice_status']}'")->row(); ?>
                    <p class="card-text text-monospace"><?= $invoice_status->name ?></p>
                </div>
            </div>

            <div class="card bg-light mb-1">
                <div class="card-header text-secondary">Invoice Type:</div>
                <div class="card-body">
                    <?php $invoice_type = $this->db->query("SELECT name from invoice_type where id='{$sales['invoice_type']}'")->row(); ?>
                    <p class="card-text text-monospace"><?= $invoice_type->name ?></p>
                </div>
            </div>

        </div>
    </div>

</main>

<style>
</style>

<script>
    $(function() {});
</script>