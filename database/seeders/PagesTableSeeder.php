<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Terms & Conditions',
                'slug' => 'terms-&-conditions',
            'details' => '<p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Agreement:</span>&nbsp;means each Order Form, these Terms and Conditions and the other documents incorporated into the Agreement as described in these Terms and Conditions;&nbsp;</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">App:</span>&nbsp;the mobile application made available by Healthera to Patients;</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Authorised Users:</span>&nbsp;those employees, agents and independent contractors of the Customer who are authorised by the Customer to use the Software and the Documentation, as further described in clause 2.1;</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Business Day:</span>&nbsp;a day other than a Saturday, Sunday or public holiday in England when banks in London are open for business;</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Confidential Information:</span>&nbsp;means commercial, financial, marketing and technical information, know-how, trade secrets and other information in any form or medium, howsoever disclosed or accessed, whether before or after the date of the Agreement (together with any reproductions of such information in any form or medium), which in each case (either in its entirety or in the precise configuration or assembly of its components) is not publicly available (save for where such information entered the public domain as a result of a breach of the Agreement);</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Contract Start Date:</span>&nbsp;means the date stated on an Order Form;</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Customer:</span>&nbsp;the customer detailed on an Order Form;</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Customer Data:</span>&nbsp;the data inputted by the Customer, Authorised Users, or Healthera on the Customer’s behalf for the purpose of using the Services or facilitating the Customer’s use of the Services;</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Data Protection Schedule:</span>&nbsp;means the data protection schedule attached as Schedule 1;</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Delivery Partner Fee:</span>&nbsp;means the delivery partner fees payable by the Customer to Healthera as detailed in an Order Form;</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Delivery Partner Go-Live:</span>&nbsp;has the meaning given to it in an Order Form;</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Delivery Partner Obligations:</span>&nbsp;has the meaning given to it in an Order Form;</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Delivery Partner Patients:</span>&nbsp;means App users who are connected to the Customer through Healthera after Delivery Partner Go-Live but excluding Existing Patients;</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Delivery Partner Services:</span>&nbsp;means the additional delivery partner services to be provided by Healthera as may be ordered by the Customer under an Order Form;</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Documentation:</span>&nbsp;the document made available to the Customer by Healthera online or such other web address notified by Healthera to the Customer from time to time which sets out a description of the Software and the user instructions for the Services;</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Existing Patients:</span>&nbsp;means (i) all App users connected to the Customer through Healthera before the Delivery Partner Go-Live and (ii) App users who are connected to the Customer through Healthera after Go-Live as a result of the Customer’s direct text or email invitation;</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Healthera:</span>&nbsp;Healthera Limited, a company incorporated in England and Wales under number 09609198 whose registered office is at St John’s Innovation Centre, Cowley Road, Cambridge, CB4 0WS;</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Healthera Materials:</span>&nbsp;means all materials, documents, information and provided by Healthera to the Customer relating to the Services, including braded materials, drawings, data, reports and specifications;</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Initial Subscription Term:</span>&nbsp;has the meaning given to it in an Order Form;</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Intellectual Property Rights:</span>&nbsp; means copyright and related rights, design rights, rights in know-how, rights in Confidential Information, database rights, software rights, patents, rights to inventions, utility models, rights in trade marks (and all goodwill attaching to such trade marks), trade names, domain names and topography rights, in each case whether registered or unregistered, including all applications for, and renewals or extensions of such rights, and any other similar or equivalent rights or forms of protection that subsist or will subsist now or in the future anywhere in the world;</p><p style="box-sizing: border-box; margin-bottom: 0.9rem; color: rgb(53, 53, 53); font-family: Poppins, sans-serif; font-size: 16px;"><span style="box-sizing: border-box; font-weight: bolder;">Marketplace Services:</span>&nbsp;means the marketplace services to be provided by Healthera to the Customer as further described in and subject to the Marketplace Terms and Conditions;</p>',
                'status' => 1,
                'date' => '01-03-2023 04:16',
                'admin_id' => '1',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_tag' => NULL,
                'location' => '2',
                'order_by' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'FAQ',
                'slug' => 'faq',
            'details' => '<dt style="color: rgb(51, 51, 51); font-style: italic; font-family: &quot;Open Sans&quot;, sans-serif; font-weight: 400;">Q: Am I speaking to a pharmacist or a technician?</dt><dd style="margin-bottom: 0px; padding: 0.25em 0.5em 1em; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: medium;">A: Only a pharmacist is a trained drug information expert. Be sure that the advice you are receiving about your medications comes from the pharmacist.</dd><dt style="color: rgb(51, 51, 51); font-style: italic; font-family: &quot;Open Sans&quot;, sans-serif; font-weight: 400;">Q: How long will I have to wait to have my prescription filled?</dt><dd style="margin-bottom: 0px; padding: 0.25em 0.5em 1em; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: medium;">A: Assuming you are a walk-in customer, all three URMC outpatient pharmacies try to fill a prescription within 20 minutes, but due to the work load, this is not always possible. To avoid delays, you can call ahead so that the prescription will be ready to be picked up.</dd>',
                'status' => 1,
                'date' => '01-03-2023 04:17',
                'admin_id' => '1',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_tag' => NULL,
                'location' => '2',
                'order_by' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'details' => NULL,
                'status' => 1,
                'date' => '01-03-2023 04:17',
                'admin_id' => '1',
                'seo_title' => NULL,
                'seo_description' => NULL,
                'seo_tag' => NULL,
                'location' => '2',
                'order_by' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}