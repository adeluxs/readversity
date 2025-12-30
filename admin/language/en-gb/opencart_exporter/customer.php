<?php
// Heading
$_['heading_title']          	= 'Free Customer Export';
$_['export_title']           	= 'Customers (%s)';

// Text
$_['text_list']          		 = 'Free Customer Export';
$_['text_all_store']			 = 'All Stores';
$_['text_all_status']	 		 = 'All Status';
$_['text_xls']	 				 = 'XLS';
$_['text_xlsx']	 				 = 'XLSX';
$_['text_csv']	 				 = 'CSV';
$_['text_xml']	 				 = 'XML';
$_['text_pdf']	 				 = 'PDF';
$_['text_no_fields']	 		 = 'No Extra Field.';
$_['text_default']	 			 = 'Default';
$_['text_from']	 			 	 = 'From';
$_['text_to']	 			 	 = 'To';
$_['text_success']	 			 = 'Your Export Has Been Done. Check Your Downloads.';
$_['text_no_results']	 		 = 'No Customer Records Found With Select Filters!';
$_['text_all']	 			 	 = 'All';
$_['text_customer_id']	 		 = 'Customer ID';
$_['text_customer']	 			 = 'Customer';
$_['text_asc']	 			 	 = 'ASC';
$_['text_desc']	 			 	 = 'DESC';
$_['text_customer']	 			 = 'Customer';
$_['text_customer_name']	 	 = 'Name';
$_['text_customer_email']	 	 = 'Email';
$_['text_customer_status']	 	 = 'Status';
$_['text_customer_approved']	 = 'Approved';
$_['text_customer_ip']	 		 = 'IP';
$_['text_customer_group']	 	 = 'Customer Group';
$_['text_customer_newsletter']	 = 'Newsletter';
$_['text_date_added']	 		 = 'Date Added';
$_['tab_customer']	 		     = 'Customer';

// Entry
$_['entry_customer_id']			 = 'Customer IDS';
$_['entry_date_start']		 	 = 'Date From';
$_['entry_date_end']		 	 = 'Date To';
$_['entry_limit_start']		 	 = 'Limit Start';
$_['entry_limit_end']		 	 = 'Limit End';
$_['entry_customer_group']	 	 = 'Customer Group';
$_['entry_store']	 			 = 'Store';
$_['entry_status']	 			 = 'Status';
$_['entry_customer_fields']		 = 'Choose Customer Data';
$_['entry_extra_field']			 = 'Export Additional Fields';
$_['entry_format']				 = 'Export Format';
$_['entry_customerdetail']	 	 = 'Customer Details';
$_['entry_customfields']	 	 = 'Custom Fields';
$_['entry_sort']	 	 	 	 = 'Sort';
$_['entry_order']	 	 	 	 = 'Order';
$_['entry_approved']	 	 	 = 'Approved';
$_['entry_ip']	 	 	 		 = 'IP Address';
$_['entry_newsletter']			 = 'Newsletter';
$_['entry_customer']		 	 = 'Filter Customer Name';
$_['entry_customeremail']		 = 'Filter Customer Email';
$_['entry_go_to_pro']			 = ' <a target="_blanck" href="https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=38587">(buy pro version)</a>';
$_['text_buy_proversion'] 		 = 'Go to Pro Vesrion';
$_['entry_customeraddress']		 = 'Customer Addresses';
$_['entry_customerreward']		 = 'Customer Rewards';
$_['entry_customertransaction']	 = 'Customer Transactions';
$_['entry_customerhistory']	 	 = 'Customer Histories';
$_['entry_reward']	 	 		 = 'Customer Rewards';

// Button
$_['button_export']				 = 'Export Customers';

// Tabs
$_['tab_customer']          	 = 'Customer';
$_['tab_extra']          		 = 'Custom Fields';
$_['tab_support']          	 	 = 'Support';

// Export
$_['export_customer_id']		=	'Customer ID';
$_['export_customer_group']		=	'Customer Group';
$_['export_store']				=	'Store';
$_['export_firstname']			=	'First Name';
$_['export_lastname']			=	'Last Name';
$_['export_email']				=	'Email';
$_['export_telephone']			=	'Telephone';
$_['export_fax']				=	'Fax';
$_['export_password']			=	"Password Encrypted\Plain \n If using plain password leave salt empty";
$_['export_salt']				=	'Salt';
$_['export_newsletter']			=	"Newsletter \n(Enabled=1/Disabled=0)";
$_['export_ip']					=	'IP Address';
$_['export_status']				=	"Status \n(Enabled=1/Disabled=0)";
$_['export_approved']			=	"Approved \n(Yes=1/No=0)";
$_['export_safe']				=	"Safe \n(Yes=1/No=0)";
$_['export_code']				=	'Code';
$_['export_date_added']			=	'Date Added';
$_['export_custom_field']		=	"Custom Fields \nName >> value 1.1 && value 1.2 ;; Name 2 >> value 2.1 && value 2.2";
$_['export_addresses']			=	"Addresses \n Firstname Lastname :: Company :: Address 1 :: Address 2 :: City :: Postcode/Zipcode :: Zone/State :: Country :: CustomFieldName >> CustomFieldValue || CustomFieldName >> CustomFieldValue1 && CustomFieldValue2 ;;";
$_['export_histories']			=	"Histories \n Commnet 1 :: Date 1;; Commnet 2 :: Date 2";
$_['export_rewards']			=	"Rewards \n Order ID :: Description :: Points :: Date;;";
$_['export_tranactions']		=	"Transactions \n Order ID :: Description :: Amount :: Date;;";

// Help

$_['help_customer_id']	 	 		 = 'Filter Multiple Customers IDS <br/> (Comma Seperated) I.e: 100,101 <br/>(Within Range) I.e: 50 - 60. <br/> Both I.e: 50-60, 70-80, 100, 101(buy pro version)';
$_['help_customer_limit']	  		 = 'Set Range Of Customer Limit. If Minimum Customer Limit Not Given But Maximum Given Than Customer Limit Export From 0 To Maximum Given.if Maximum Customer Limit Not Given But Minimum Given Than Customer Limit Export From Minimum Given To Unlimited. If Not Both Maximum And Minimum Not Given, Customer Limit Will Be Ignored.(buy pro version)';
$_['help_customer']				 = '(autocomplete)';
$_['help_extra_field']			 = 'These Are Addition Columns Created In Customer Table(buy pro version)';
$_['help_format']				 = 'Select Format In Which You Want To Export Customers(buy pro version)';
$_['help_customerdetail']		 = 'Select Yes If Want To Export Customer Details(buy pro version)';
$_['help_customeraddress']		 = 'Select Yes If Want To Export Customer Address(buy pro version)';
$_['help_customerhistory']		 = 'Select Yes If Want To Export Customer Histories(buy pro version)';
$_['help_customertransaction']	 = 'Select Yes If Want To Export Customer Transactions(buy pro version)';
$_['help_customerreward']		 = 'Select Yes If Want To Export Customer Rewards(buy pro version)';
$_['help_customfields']	 	 	 = 'Select Yes If Want To Export Custom Fields Provided By OpenCart(buy pro version)';


// Table
$_['table_customer']				 = 'Customer';

// PlaceHolder 
$_['placeholder_ip']				 = 'IP Address';

// Export
$_['export_customer_id']			 = 'Customer ID';

// Export Xml
$_['exportxml_customer_id']			= 'customer_id';
$_['exportxml_customer_group']		= 'customer_group';
$_['exportxml_store']		        = 'store';
$_['exportxml_firstname']		    = 'firstname';
$_['exportxml_lastname']		    = 'lastname';
$_['exportxml_email']		        = 'email';
$_['exportxml_telephone']		    = 'telephone';
$_['exportxml_fax']		            = 'fax';
$_['exportxml_password']		    = 'password';
$_['exportxml_salt']		        = 'salt';
$_['exportxml_newsletter']		    = 'newsletter';
$_['exportxml_ip']		            = 'ip';
$_['exportxml_status']		        = 'status';
$_['exportxml_approved']		    = 'approved';
$_['exportxml_safe']		        = 'safe';
$_['exportxml_code']		        = 'code';
$_['exportxml_date_added']		    = 'date_added';
$_['exportxml_addresses']		    = 'addresses';
$_['exportxml_histories']		    = 'histories';
$_['exportxml_transaction']		    = 'transaction';
$_['info_format']		            = '.csv format availble.Any other format then <a target="_blanck" href="https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=38587">buy pro version.</a><br/>- export first 50 customer.';

// Error
$_['error_warning']          	 = 'Warning: Please Check The Form Carefully For Errors!';
$_['error_permission']       	 = 'Warning: You Do Not Have Permission To Modify Free Customer Export!';
$_['error_onerequired']       	 = 'Please Select Any One Field For Export!';
$_['error_onerequired']       	 = 'Please Select Any One Field For Export!';